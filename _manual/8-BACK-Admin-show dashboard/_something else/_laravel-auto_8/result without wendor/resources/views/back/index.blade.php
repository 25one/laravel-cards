@extends('back.layout')

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
@endsection

@section('main')

        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                      @if (session('auto-updated'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('auto-updated') !!}
                          @endcomponent
                      @endif
                      <table>
                         <thead>
                          <tr>
                            @admin
                            <td class="widthbutton">&nbsp;</td>
                            @endadmin
                            <td class="widthbutton">&nbsp;</td>
                            <td>Country</td>                            
                            <td>Name</td>
                            <td>Image</td>
                          </tr>  
                          </thead>
                          <tbody id="pannel">
                             @include('back.brick-standard')
                         </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>  
</section>  

@endsection

@section('js')
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
       //...
    </script>
@endsection    
