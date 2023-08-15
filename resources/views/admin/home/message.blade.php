@foreach($message as $data)
    <div class="message">
        <p class="message-details">
            <strong>Nom:</strong> {{ $data->nom }}<br>
            <strong>Prénom:</strong> {{ $data->prenom }}<br>
            <strong>Téléphone:</strong> {{ $data->telephone }}<br>
            <strong>gmail:</strong> {{ $data->gmail }}<br>
            <strong>Aperçu du Message:</strong> {{ substr($data->message, 0, 100) . (strlen($data->message) > 100 ? '...' : '') }}<br>
            <strong>Qui:</strong> {{ $data->qui }}
        </p>
        <!-- Bouton pour répondre -->
        <form action="{{ route('marquer.repondu', ['id' => $data->id]) }}" method="post">
            @csrf
            <button type="submit" class="btn-repondu" style="background-color: {{ $data->repondu ? 'red' : 'green' }}">
                {{ $data->repondu ? 'Repondu' : 'Répondre' }}
            </button>
        </form>
    </div>
@endforeach
