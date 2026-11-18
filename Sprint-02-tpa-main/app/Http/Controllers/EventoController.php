<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventoFormRequest;
use App\Models\Evento;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventoController extends Controller
{
    public function index(): View
    {
        $eventos = Evento::withCount('perguntas')->latest()->paginate(10);
        return view('eventos.index', compact('eventos'));
    }

    public function create(): View
    {
        return view('eventos.create');
    }

    public function store(EventoFormRequest $request): RedirectResponse
    {
        Evento::create($request->validated());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento criado com sucesso!');
    }

    public function show(Evento $evento): View
    {
        $evento->load('perguntas');
        return view('eventos.show', compact('evento'));
    }
}
