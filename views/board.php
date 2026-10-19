<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banca Richieste</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Bacheca Richieste Assistenza</h1>

        <?php if (empty($richieste)): ?>
            <p>Nessuna richiesta presente in bacheca.</p>
        <?php else: ?>
            <?php foreach ($richieste as $richiesta): ?>
                <div class="card">
                    <h3><?= htmlspecialchars($richiesta -> titolo) ?></h3>
                    <p><?= htmlspecialchars($richiesta -> descrizione) ?></p>
                    <div class="meta">
                        <strong>Inviato da:</strong> <?= htmlspecialchars($richiesta -> autore) ?><br>
                        <strong>Data:</strong> <?= htmlspecialchars($richiesta -> data) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>