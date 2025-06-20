@foreach (['success', 'error', 'warning', 'info'] as $type)
    @if(session($type))
        <div class="alert alert-{{ $type }} alert-dismissible fade show mt-3" role="alert" id="alert-{{ $type }}">
            {{ session($type) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endforeach

{{-- Auto-dismiss alert --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            document.querySelectorAll('.alert').forEach(function (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                alert.style.opacity = '0';
            });
        }, 3000);
    });
</script>

<style>
    .alert {
        transition: opacity 0.5s ease-in-out;
    }
</style>
