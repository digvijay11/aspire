<div class="content-left">
  <ul class="nav nav-content tab-pill">
      <li class="{{($active=='info')?'active':''}}">
          <a href="{{ URL::to('admin/property-let/info')}}" >
              <i class="fa fa-folder"></i>
              <span>Information</span>
          </a>
      </li>
      <li class="{{($active=='media')?'active':''}}">
          <a href="{{ URL::to('admin/property-let/media')}}" >
              <i class="fa fa-briefcase"></i>
              <span>Media</span>
          </a>
      </li>
      <li class="{{($active=='landlord')?'active':''}}">
          <a href="{{ URL::to('admin/property-let/landlord')}}" >
              <i class="fa fa-group"></i>
              <span>Landlord(s)</span>
          </a>
      </li>
      <li class="{{($active=='viewing')?'active':''}}">
          <a href="{{ URL::to('admin/property-let/viewing')}}" >
              <i class="fa fa-group"></i>
              <span>Viewing</span>
          </a>
      </li>
      <li class="{{($active=='tenant')?'active':''}}">
          <a href="{{ URL::to('admin/property-let/tenant')}}" >
              <i class="fa fa-gear"></i>
              <span>Tenant(s)</span>
          </a>
      </li>
      <li class="{{($active=='deal')?'active':''}}">
          <a href="{{ URL::to('admin/property-let/deal')}}" >
              <i class="fa fa-gear"></i>
              <span>Deals</span>
          </a>
      </li>
      <li class="{{($active=='info3')?'active':''}}">
          <a href="{{ URL::to('admin/property-let/info')}}" >
              <i class="fa fa-gear"></i>
              <span>Agreements</span>
          </a>
      </li>
  </ul>
</div>