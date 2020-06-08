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
                      <th>Price</th>
                      <th>In stock</th>
                      <th>Activity</th>
                      <th>Start date</th>
                      <th>Action</th>
                  </tr>
              </thead>
            {/block}
            {block name="table-body"}
              <tbody>
                {foreach $articles.data as $article}
                  <tr>
                      <td>{$article.id}</td>
                      <td>{$article.name}</td>
                      <td>{$article.price}</td>
                      <td>{$article.in_stock}</td>
                      <td>{$article.active}</td>
                      <td>{$article.added_in}</td>
                      <td>
                        <a href="{url url='backend/articles/detail?a='|cat:$article.id}" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="{url url='backend/articles/delete?a='|cat:$article.id}" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
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
      {$articles.pagination}
    </div>
  </div>
</div>
