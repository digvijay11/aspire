<div class="content-left">
  <ul class="nav nav-content">
      <li class="{{($page['active']=='info')?'active':''}}">
          <a href="{{ URL::to('admin/customers/landlord/profile')}} @if(!empty($customer->id)){{'/'.$customer->id}} @endif" >
              <span>Profile</span>
          </a>
      </li>
      <li class="{{($page['active']=='attributes')?'active':''}}">
          <a href="@if(!empty($customer->id)){{ URL::to('admin/customers/seller/matching')}}{{'/'.$customer->id}} @else {{'#'}} @endif" >
              <span>Applicants</span>
          </a>
      </li>
      <li class="{{($page['active']=='info1')?'active':''}}">
          <a href="@if(!empty($customer->id)){{ URL::to('admin/customers/seller/appointments')}}{{'/'.$customer->id}} @else {{'#'}} @endif" >
              <span>Media</span>
          </a>
      </li> 
   </ul>
</div>