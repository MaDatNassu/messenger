@extends('layouts.app')

@section('content')
  <div class="threads">
    <ul class="unstyled-list">
      <li class="thread">
        <figure class="contact-img">
          <img src="https://dummyimage.com/50x50/00aeff/000" alt="Contact">
        </figure>
        <div class="middle-side">
          <p class="contact-name">Lorem ipsum</p>
          <p class="last-message">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="right-side">
          <span class="pin">14</span>
          <p class="last-message-date">00:14</p>
        </div>
      </li>

      <li class="thread">
        <figure class="contact-img">
          <img src="https://dummyimage.com/50x50/00aeff/000" alt="Contact">
        </figure>
        <div class="middle-side">
          <p class="contact-name">Lorem ipsum</p>
          <p class="last-message">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="right-side">
          <span class="pin">2</span>
          <p class="last-message-date">22:57</p>
        </div>
      </li>

      <li class="thread">
        <figure class="contact-img">
          <img src="https://dummyimage.com/50x50/00aeff/000" alt="Contact">
        </figure>
        <div class="middle-side">
          <p class="contact-name">Lorem ipsum</p>
          <p class="last-message">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="right-side">
          <span class="pin">1</span>
          <p class="last-message-date">Hier</p>
        </div>
      </li>
    </ul>
  </div>
@endsection
