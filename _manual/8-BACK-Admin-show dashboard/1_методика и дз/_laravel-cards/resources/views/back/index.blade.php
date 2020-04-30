@extends('back.layout')

@section('css')
<style>
/*
.content {
width: 30%;  
}
*/
</style>  
@endsection

@section('main')

        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                      @if (session('card-updated'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('card-updated') !!}
                          @endcomponent
                      @endif                      
                      <table>
                         <thead>
                          <tr>
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                            <td>User Name</td>
                            <td>Card Number</td>                            
                            <td>Card Name</td>
                            <td>Card Type</td>
                            <td>Card Content</td>                            
                          </tr>  
                          </thead>
                          <tbody id="pannel">
                             @include('back.brick-standard')
                             @php
                             //print_r($cards)
                             @endphp
                         </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>         
@endsection

@section('js')

@endsection