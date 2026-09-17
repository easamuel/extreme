@extends('layouts.app')

@section('title', $title ?? 'ESPass Ticketing Platform - ExtremeSolutions')
@section('description', $description ?? 'Sell tickets, manage attendees, and check people in at the door — live at espass.extremesolutions.com.ng.')

@section('content')
    <!-- Hero -->
    <section class="bg-gradient-to-r from-[#1e3a5f] to-[#2a4d7a] py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white">
                <span class="inline-block bg-[#00ff88] text-[#1e3a5f] text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full mb-4">Live Now</span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Sell Tickets, Manage Events, Check People In</h1>
                <p class="text-xl text-white/90 mb-8">
                    ESPass is our event ticketing platform — from putting an event on sale to scanning guests in
                    at the door, without juggling spreadsheets and third-party tools.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('home') }}?subject=ESPass+Demo+Request#contact" class="bg-[#00ff88] text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-[#00cc6a] transition-colors shadow-lg">
                        Book a Free Demo
                    </a>
                    <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener" class="bg-white text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        See the Live Platform →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Everything to Run an Event</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Event Creation &amp; Ticket Sales</h3>
                        <p class="text-gray-600 text-sm">Put an event on sale with different ticket types, then track sales as they come in.</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Digital Tickets</h3>
                        <p class="text-gray-600 text-sm">Attendees get a scannable digital ticket — no printing, no manual guest lists.</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Check-In at the Door</h3>
                        <p class="text-gray-600 text-sm">Scan tickets on arrival so you know exactly who's in the room, in real time.</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Attendee Dashboard</h3>
                        <p class="text-gray-600 text-sm">See registrations, check-ins, and sales in one place instead of a scattered spreadsheet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust / CTA -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Built and Run by Our Own Team</h2>
                <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                <p class="text-lg text-gray-700 mb-8">
                    Like everything we build, ESPass is a live product, not a mockup. See it running at
                    <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener" class="text-[#1e3a5f] font-semibold underline">espass.extremesolutions.com.ng</a>,
                    or tell us about your event and we'll walk you through it.
                </p>
                <a href="{{ route('home') }}?subject=ESPass+Demo+Request#contact" class="inline-block bg-[#1e3a5f] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors">
                    Talk to Us About Your Event
                </a>
            </div>
        </div>
    </section>
@endsection
