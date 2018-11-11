@extends('layouts.app')

@section('content')
  <div class="threads">
    <ul class="unstyled-list">

    @foreach ($threads as $thread)
      @if ($thread->lastmessage != null)
        <li class="thread">
          <figure class="contact-img">
            <img src="https://dummyimage.com/50x50/00aeff/000" alt="Contact">
          </figure>
          <div class="middle-side">
            <p class="contact-name">Lorem ipsum</p>
            <p class="last-message">{{ str_limit( $thread->lastmessage->message, 61, '...' ) }}</p>
          </div>
          <div class="right-side">
            <span class="pin">{{ rand(0, 99) }}</span>
            <p class="last-message-date">00:14</p>
          </div>
        </li>
      @endif
    @endforeach

    </ul>
  </div>
@endsection
