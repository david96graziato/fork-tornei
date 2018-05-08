<body>
    <h2>Iscrizione completata</h2>
    <p>L'iscrizione al torneo e' avvenuta con successo.</p>
    <br />
    <p>
    	Dati inseriti:
    	<ul>
    		<li><strong>Nome</strong>: {{ $subscriber->name }}</li>
    		<li><strong>Cognome</strong>: {{ $subscriber->surname }}</li>
    		<li><strong>Data di nascita</strong>: {{ $subscriber->birthday }}</li>
    		<li><strong>Telefono</strong>: {{ $subscriber->phone }}</li>
    		<li><strong>Tessera FIT</strong>: {{ $subscriber->fit }}</li>
    		<li><strong>Club</strong>: {{ $subscriber->club }}</li>
    		<li><strong>Classifica</strong>: {{ $subscriber->score->name }}</li>
    		<li><strong>Categoria</strong>: {{ $subscriber->category->name }}</li>
    		<li><strong>Tipologia</strong>: {{ $subscriber->type->name }}</li>
    		<li><strong>Nota</strong>: {{ empty($subscriber->note) ? '(Vuoto)' : $subscriber->note }}</li>
    	</ul>
    </p>
</body>