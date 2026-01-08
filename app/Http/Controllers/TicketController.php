<?php
namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(Ticket $ticket)
    {
        return Inertia::render('Ticket/Show', [
            'ticket' => $ticket->only(
                'name',
                'gender',
                'inquiry',
                'status'
            ),
        ]);

        return inertia('Ticket/Show', [
            'ticket' => $ticket->only(
                'name',
                'gender',
                'inquiry',
                'status'
            ),
        ]);
    }

    public function index()
    {
        $tickets = Ticket::all();
        return Inertia::render('ticket',['tickets' => $tickets]);
    }

    public function showCreate()
    {
        return Inertia::render('ticket/create');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'inquiry' => 'required|string|max:255',
            'status' => 'required|in:New,Processing,Cancel,Completed',
        ]);

        Ticket::create([
            'name' => $validated['name'],
            'gender' => $validated['gender'],
            'inquiry' => $validated['inquiry'],
            'status' => $validated['status'],
        ]);
        return to_route('ticket');
    }

    public function delete($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->back();
    }

    public function showEdit($id){
        $ticket = Ticket::findorFail($id);
        return Inertia::render('ticket/edit', ['ticket' => $ticket,]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:New,Processing,Cancel,Completed',
        ]);

        Ticket::where('id', $id)->update([
            'status' => $validated['status'],
        ]);
        return to_route('ticket');
    }

}