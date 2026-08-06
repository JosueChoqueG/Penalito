<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index', ['title' => 'Inicio - Corporación Jurídica Penalito']);
    }

    public function about() {
        return view('pages.about', ['title' => 'Nosotros - Corporación Jurídica Penalito']);
    }

    public function contact() {
        return view('pages.contact', ['title' => 'Contacto - Corporación Jurídica Penalito']);
    }

    public function blog() {
        return view('pages.blog', ['title' => 'Blogs - Corporación Jurídica Penalito']);
    }

    public function capacitacion() {
        return view('pages.capacitacion', ['title' => 'Capacitación - Corporación Jurídica Penalito']);
    }

    public function casesPage() {
        return view('pages.case', ['title' => 'Casos - Corporación Jurídica Penalito']);
    }

    public function faq() {
        return view('pages.faq', ['title' => 'Preguntas Frecuentes - Corporación Jurídica Penalito']);
    }

    public function libros() {
        return view('pages.libros', ['title' => 'Libros - Corporación Jurídica Penalito']);
    }

    public function services() {
        return view('pages.services', ['title' => 'Servicios - Corporación Jurídica Penalito']);
    }

    public function videos() {
        return view('pages.videos', ['title' => 'Videos - Corporación Jurídica Penalito']);
    }

    public function suscripcion() {
        return view('pages.suscripcion', ['title' => 'Suscripción Online - Corporación Jurídica Penalito']);
    }

    public function login() {
        return view('pages.login', ['title' => 'Iniciar Sesión - Corporación Jurídica Penalito']);
    }

    public function verificador() {
        return view('pages.verificador', ['title' => 'Verificador de Certificados - Corporación Jurídica Penalito']);
    }

    public function inscripcion() {
        return view('pages.inscripcion', ['title' => 'Inscripción en Línea - Corporación Jurídica Penalito']);
    }

    public function notFound() {
        return view('pages.not-found', ['title' => 'Página No Encontrada - Corporación Jurídica Penalito']);
    }
}
