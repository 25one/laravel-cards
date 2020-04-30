@foreach($autos as $auto)
<tr>
@admin
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
@endadmin
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="#"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
   <td>{{ $auto->country->name }}</td> 
   <td>{{ $auto->name }}</td>      
   <td class="center"><img class="img_auto" src="{{ asset('public/images/' . $auto->image) }}" alt=""></td>
</tr>
@endforeach


