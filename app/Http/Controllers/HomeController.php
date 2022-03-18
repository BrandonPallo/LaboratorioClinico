<?php
namespace App\Http\Controllers;
use App\Project;
use App\Service;
use Illuminate\Http\Request;
use Exception;
use PhpOffice\PhpWord\TemplateProcessor;
use PDF;

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
        $anio = date("Y", $fechaComoEntero);
        $mes = date("m", $fechaComoEntero);
        $dia = date("d", $fechaComoEntero);
        //guardamos y descargamos el documento en word
        $templateProcessor->saveAs('PI_'.$dia.$mes.$anio. '.docx');
        return response()->download('PI_'.$dia.$mes.$anio. '.docx')->deleteFileAfterSend(true);
    }
    //Función para generar pdf
    public function generatePDF($id)
    {
        $cont=0;
        var_dump($cont);
        //Establecer la ruta del renderizador del motor PDF
        $domPdfPath = base_path('vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
        $service = Service::findOrFail($id);
        //Lectura del archivo doc
        $templateProcessor = new TemplateProcessor('hojaderuta.docx');
        //Sustitución de variables en el archivo doc
        $templateProcessor->setValue('id',$service->id);
        $templateProcessor->setValue('name',$service->name);
        $templateProcessor->setValue('company',$service->company);
        $templateProcessor->setValue('service_engineer',$service->service_engineer);
        $templateProcessor->setValue('date',$service->date);
        $templateProcessor->setValue('csr',$service->csr);
        $templateProcessor->setValue('company_1',$service->company_1);
        $templateProcessor->setValue('company_2',$service->company_2);
        $templateProcessor->setValue('addres_1',$service->addres_1);
        $templateProcessor->setValue('addres_2',$service->addres_2);
        $templateProcessor->setValue('site_contact',$service->site_contact);
        $templateProcessor->setValue('attention',$service->attention);
        $templateProcessor->setValue('phone_1',$service->phone_1);
        $templateProcessor->setValue('phone_2',$service->phone_2);
        $templateProcessor->setValue('service_request',$service->service_request);
        //Definir el nombre del documento acorde las fechas
        $fecha = $service->date;
        $fechaComoEntero = strtotime($fecha);
        $anio = date("Y", $fechaComoEntero);
        $mes = date("m", $fechaComoEntero);
        $dia = date("d", $fechaComoEntero);
        
        //Guardar archivo temporal de Word con un nuevo nombre
        $saveDocPath = public_path('new-result.docx');
        $templateProcessor->saveAs($saveDocPath);
        // Cargar temporalmente crear un archivo word
        $Content = \PhpOffice\PhpWord\IOFactory::load($saveDocPath);
        //Guardalo en PDF
        $cont+=1;
        $savePdfPath = public_path('S_'.$service->addres_1.'_'.$service->csr.'_00'.$cont.'_'.$dia.$mes.$anio.'.pdf');
        $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
        $PDFWriter->save($savePdfPath);
        return response()->download($savePdfPath); 
        /*@ Elimina el arcihvo temporal de word */
         if ( file_exists($saveDocPath) ) {
            unlink($saveDocPath);
        }
    }
}