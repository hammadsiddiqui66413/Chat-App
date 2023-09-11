@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Messages</div>
        <div class="card-body">
            <chat-messages :messages="messages"></chat-messages>
        </div>
        <div class="card-footer">
            <chat-form v-on:sendmessage="addMessage" :user="{{ Auth::user() }}"></chat-form>
        </div>
    </div>
</div>
@endsection
