@php
    $currentTitle;
    $currentUrl = url()->current();

    if($currentUrl == "http://127.0.0.1:8000"){
        $currentTitle = "Welcome";
    } elseif($currentUrl == "http://127.0.0.1:8000/about"){
        $currentTitle = "About";
    } elseif($currentUrl == "http://127.0.0.1:8000/service"){
        $currentTitle = "Service";
    }
@endphp

<h1 class="mt-5">{{$currentTitle}} Subheading</h1>
<nav id="breadCrumb" class="p-2 mb-3" aria-label="breadcrumb">
  <ol class="breadcrumb mt-2">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$currentTitle}}</li>
  </ol>
</nav>