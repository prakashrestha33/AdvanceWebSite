<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="{!! URL::to('home') !!}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Users</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{!!URL::to('home/user')!!}">Add User</a></li>                          
                          <li><a class="" href="{!!URL::to('home/manage_user')!!}">Edit User</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Leads/Account</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="">Leads</a></li>
                          <li><a class="" href="">Account</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="{!!URL::to('category')!!}">
                          <i class="icon_genius"></i>
                          <span>Catagories</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="{!!URL::to('product')!!}">
                          <i class="icon_piechart"></i>
                          <span>Products</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="sub-menu">
                      <a href="" class="">
                          <i class="icon_table"></i>
                          <span>Reports</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" class="">
                          <i class="icon_table"></i>
                          <span>Cases</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" class="">
                          <i class="icon_table"></i>
                          <span>Real Time Location</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" class="">
                          <i class="icon_table"></i>
                          <span>To-Do List</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="" class="">
                          <i class="icon_table"></i>
                          <span>Dispatch</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->