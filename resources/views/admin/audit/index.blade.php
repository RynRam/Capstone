@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Audits</h1>

  </div>

  <div class="container-fluid">
    <hr>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Audits/Logs</h5>
          </div>
          <h5><ul>
              @forelse ($audit as $audit)
              <li>
                  @lang('article.updated.metadata', $audit->getMetadata())

                  @foreach ($audit->getModified() as $attribute => $modified)
                  <ul>
                      <li>@lang('article.'.$audit->event.'.modified.'.$attribute, $modified)</li>
                  </ul>
                  @endforeach
              </li>
              @empty
              <p>@lang('article.unavailable_audits')</p>
              @endforelse
        </div>
      </div>
    </div>


  </div>

</div>
@endsection 