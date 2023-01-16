<form onsubmit="return confirm('Confermi l\'eliminazione di: {{ $cartoon->title }}')"
    action="{{ route('cartoons.destroy', $cartoon) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')

    <button type="submit" href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</form>
