<?php
namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;
use Exception;
use PhpOffice\PhpWord\TemplateProcessor;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    //Funcion para descargar en word
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
        $fileName = $project->nombre_documento;
        $templateProcessor->saveAs($fileName. '.docx');
        return response()->download($fileName. '.docx')->deleteFileAfterSend(true);
    }
}