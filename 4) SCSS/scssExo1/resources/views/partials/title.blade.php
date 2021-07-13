@php
   $currentTitle;
   $currentUrl = url()->current();
if ($currentUrl == 'http://127.0.0.1:8000') {
    $currentTitle = "Home";
}
elseif ($currentUrl == 'http://127.0.0.1:8000/about') {
    $currentTitle = "About";
}
elseif ($currentUrl == 'http://127.0.0.1:8000/services') {
    $currentTitle = "Services";
}
@endphp

<div>
<h1>{{$currentTitle}} Title</h1>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>
</div>