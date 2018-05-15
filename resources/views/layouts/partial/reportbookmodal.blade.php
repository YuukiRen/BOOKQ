  <!-- Modal -->
  <div class="modal fade" id="reportbookmodal" tabindex="-1" role="dialog" aria-labelledby="reportbookmodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reportbookmodalLongTitle">Report this Book</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST"  action='{{ url("/report/{$books->id}") }}'>
          {{csrf_field()}}
        <div class="modal-body">
          <textarea placeholder="Write your reason to report this book" rows="5" class="input100 form-control" name="report_desc"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Send Report" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
  </div>
  <script>
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
  </script>