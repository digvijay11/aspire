<div class="content-left">
  <ul class="nav nav-content">
      <li class="{{($active=='info')?'active':''}}">
          <a href="{{ URL::to('admin/property-sale/info')}}" >
              <i class="fa fa-folder"></i>
              <span>Information</span>
          </a>
      </li>
      <li class="{{($active=='attributes')?'active':''}}">
          <a href="{{ URL::to('admin/property-sale/attributes')}}" >
              <i class="fa fa-check-square"></i>
              <span>Attributes</span>
          </a>
      </li>
      <li class="{{($active=='info1')?'active':''}}">
          <a href="{{ URL::to('admin/property-sale/info')}}" >
              <i class="fa fa-briefcase"></i>
              <span>Media</span>
          </a>
      </li>
      <li class="{{($active=='info2')?'active':''}}">
          <a href="{{ URL::to('admin/property-sale/info')}}" >
              <i class="fa fa-group"></i>
              <span>Landlord's</span>
          </a>
      </li>
      <li class="{{($active=='info3')?'active':''}}">
          <a href="{{ URL::to('admin/property-sale/info')}}" >
              <i class="fa fa-gear"></i>
              <span>Tenants</span>
          </a>
      </li>
  </ul>
</div>