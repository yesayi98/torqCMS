<div class="row">
  <div class="col-lg-12">
    <div class="card">
      {block name="table-name"}
      <div class="card-header"><i class="fa fa-table"></i> Users ({$users.total})</div>
      {/block}
      <div class="card-body">


        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            {block name="table-head"}
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Lastname</th>
                      <th>email</th>
                      <th>phone</th>
                      <th>gender</th>
                      <th>specific id</th>
                      <th>guest / confirmed</th>
                      <th>Action</th>
                  </tr>
              </thead>
            {/block}
            {block name="table-body"}
              <tbody>
                {foreach $users.data as $user}
                  <tr>
                      <td>{$user.id}</td>
                      <td>{$user.name}</td>
                      <td>{$user.lastname}</td>
                      <td>{$user.email}</td>
                      <td>{$user.phone}</td>
                      <td>{$user.gender}</td>
                      <td>{$user.specific_id}</td>
                      <td>{$user.guest} / {$user.confirmed}</td>
                      <td>
                        <a href="{url url='backend/users/detail?u='|cat:$user.id}" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="{url url='backend/users/delete?u='|cat:$user.id}" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr>
                {/foreach}
              </tbody>
            {/block}
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->
<div class="row">
  <div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
      {$users.pagination}
    </div>
  </div>
</div>
