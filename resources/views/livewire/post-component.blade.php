<div>
    <div>
        <nav class="navbar sticky-top bg-body-tertiary border border-secondary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Posts</a>
          </div>
        </nav>
        <div class="container px-4 py-5">
          <button wire:click="create" class="btn btn-primary">Create Post</button>
          @if ($isOpen)
          <div class="modal show" tabindex="-1" role="dialog" style="display: block;" >
              <div class="modal-dialog" role="document">
                  <div class="modal-content text-bg-dark">

                      <div class="modal-header">
                          <h5 class="modal-title">
                             Add Post
                          </h5>
                          <svg wire:click="closeModal" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                      </div>
                      <div class="modal-body">
                          <form wire:submit="store">
                              <div class="form-group">
                                  <label for="title">Post Title</label>
                                  <input type="text" class="form-control" id="title" placeholder="Enter post title">
                              </div>
                              <div class="form-group">
                                  <label for="body">Post Body</label>
                                  <textarea class="form-control" id="body" rows="4" placeholder="Enter post body"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary mt-4">
                                Save
                              </button>
                              <button type="button" wire:click="closeModal" class="btn btn-secondary mt-4">Close</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-backdrop fade show"></div>
          @endif
      </div>
      </div>
</div>
