<div class="row">
  <div class="col-lg-12">
    <div class="card">
      {block name="table-name"}
        <div class="card-header"><i class="fa fa-table"></i> Emotions List</div>
      {/block}
      <div class="card-body">
        <div class="table-responsive">
          <table id="default-datatable" class="table table-bordered">
            {block name="table-head"}
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Row Height</th>
                      <th>Is Fullscreen</th>
                      <th>Class</th>
                      <th>Activity</th>
                      <th>Action</th>
                  </tr>
              </thead>
            {/block}
            {block name="table-body"}
              <tbody>
                {foreach $emotions as $emotion}
                  <tr>
                      <td>{$emotion.id}</td>
                      <td>{$emotion.name}</td>
                      <td>{$emotion.row_height}</td>
                      <td>{$emotion.full_screen}</td>
                      <td>{$emotion.class}</td>
                      <td>{$emotion.active}</td>
                      <td>
                        <a href="{url url='backend/emotions/detail?e='|cat:$emotion.id}" class="btn btn-info waves-effect waves-light m-1"><i class="fa fa-pencil"></i></a>
                        <a href="{url url='backend/emotions/delete?e='|cat:$emotion.id}" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash"></i></a>
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
