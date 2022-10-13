<h2>
 {{ $user->name }}
</h2>

<a href="{{ route('verification', ['id' => $user->id ]) }}">Verification link</a>
