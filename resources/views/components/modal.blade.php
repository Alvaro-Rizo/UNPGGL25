@props(['id', 'title'])

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg rounded-4">
      <div class="modal-header bg-dark text-white rounded-top-4">
        <h5 class="modal-title">{{ $title }}</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        {{ $footer ?? '' }}
      </div>
    </div>
  </div>
</div>
