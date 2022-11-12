<?php
namespace App\Http\Controllers;
use App\Project;
use App\Service;
use Illuminate\Http\Request;
use Exception;
use PhpOffice\PhpWord\TemplateProcessor;
use PDF;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    //Función para descargar en word
    public function generateDocx($id)
    {
        $project = Project::findOrFail($id);
        $templateProcessor = new TemplateProcessor('project.docx');
        $templateProcessor->setValue('id',$project->id);
        $templateProcessor->setValue('name',$project->name);
        $templateProcessor->setValue('revisado',$project->revisado);
        $templateProcessor->setValue('felaboracion',$project->felaboracion);
        $templateProcessor->setValue('frevision',$project->frevision);
        $templateProcessor->setValue('rev',$project->rev);
        $templateProcessor->setValue('empresa',$project->empresa);
        $templateProcessor->setValue('proyecto',$project->proyecto);
        $templateProcessor->setValue('codigo_proy',$project->codigo_proy);
        $templateProcessor->setValue('ubicacion',$project->ubicacion);
        $templateProcessor->setValue('fentrega',$project->fentrega);
        $templateProcessor->setValue('documento',$project->documento);
        $templateProcessor->setValue('revisado',$project->revisado);
        $templateProcessor->setValue('nombre_documento',$project->nombre_documento);
        //Definir el nombre del documento acorde las fechas
        $fecha = $project->fentrega;
        $fechaComoEntero = strtotime($fecha);
        $anio = date("y", $fechaComoEntero);
        $mes = date("m", $fechaComoEntero);
        $dia = date("d", $fechaComoEntero);
        //guardamos y descargamos el documento en word
        $templateProcessor->saveAs('PI_'.$dia.$mes.$anio. '.docx');
        return response()->download('PI_'.$dia.$mes.$anio. '.docx')->deleteFileAfterSend(true);
    }
    //Función para generar pdf
    public function generatePDF($id)
    {
       
        //Establecer la ruta del renderizador del motor PDF
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
        $project = Project::findOrFail($id);
        //Lectura del archivo doc
        $templateProcessor = new TemplateProcessor('project.docx');
        //Sustitución de variables en el archivo doc
        $templateProcessor->setValue('id',$project->id);
        $templateProcessor->setValue('name',$project->name);
        $templateProcessor->setValue('revisado',$project->revisado);
        $templateProcessor->setValue('felaboracion',$project->felaboracion);
        $templateProcessor->setValue('frevision',$project->frevision);
        $templateProcessor->setValue('rev',$project->rev);
        $templateProcessor->setValue('empresa',$project->empresa);
        $templateProcessor->setValue('proyecto',$project->proyecto);
        $templateProcessor->setValue('codigo_proy',$project->codigo_proy);
        $templateProcessor->setValue('ubicacion',$project->ubicacion);
        $templateProcessor->setValue('fentrega',$project->fentrega);
        $templateProcessor->setValue('documento',$project->documento);
        $templateProcessor->setValue('revisado',$project->revisado);
        $templateProcessor->setValue('nombre_documento',$project->nombre_documento);

        //Definir el nombre del documento acorde las fechas
        $fecha = $project->felaboracion;
        $fechaComoEntero = strtotime($fecha);
        $anio = date("y", $fechaComoEntero);
        $mes = date("m", $fechaComoEntero);
        $dia = date("d", $fechaComoEntero);
        //Guardar archivo temporal de Word con un nuevo nombre
        $saveDocPath = public_path('new-result.docx');
        $templateProcessor->saveAs($saveDocPath);
        // Cargar temporalmente crear un archivo word
        $Content = \PhpOffice\PhpWord\IOFactory::load($saveDocPath);
        //Guardar en PDF
        $savePdfPath = public_path('LAB'.$dia.$mes.$anio. '.pdf');
        /*@ Elimina el arcihvo temporal de word */
          if ( file_exists($saveDocPath) ) {
             unlink($saveDocPath);
         }
        //descargar el pdf
        $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
        $PDFWriter->save($savePdfPath);
        
        return response()->download($savePdfPath)->deleteFileAfterSend(true);   
        
    }
}