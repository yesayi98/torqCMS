<div class="row">
  <div class="col-lg-12">
    <div class="card">
      {block name="table-name"}
      <div class="card-header"><i class="fa fa-table"></i> Article List</div>
      {/block}
      <div class="card-body">
        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            {block name="table-head"}
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Author</th>
                      <th>Created date</th>
                      <th>Changed date</th>
                      <th>Activity</th>
                      <th>Action</th>
                  </tr>
              </thead>
            {/block}
            {block name="table-body"}
              <tbody>
                {foreach $blogs.data as $blog}
                  <tr>
                      <td>{$blog.id}</td>
                      <td>{$blog.name|truncate}</td>
                      <td>{$blog.author}</td>
                      <td>{$blog.created_date}</td>
                      <td>{$blog.changed_date}</td>
                      <td>{$blog.active}</td>
                      <td>
                        <a href="{url url='backend/blog/detail?blog='|cat:$blog.id}" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="{url url='backend/blog/delete?blog='|cat:$blog.id}" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
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
      {$blogs.pagination}
    </div>
  </div>
</div>
