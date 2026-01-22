<?php
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

/* =====================
   LISTE DES PRODUITS
===================== */
$requete = $pdo->query("SELECT * FROM products");
$tableau = $requete->fetchAll(PDO::FETCH_ASSOC);

/* =====================
   AJOUT
===================== */
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["action"] === "add") {
    $stmt = $pdo->prepare(
        "INSERT INTO products (name, price, stock) VALUES (?, ?, ?)"
    );
    $stmt->execute([$_POST["name"], $_POST["price"], $_POST["stock"]]);
    header("Location: admin-produits.php");
    exit;
}

/* =====================
   SUPPRESSION
===================== */
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);
    header("Location: admin-produits.php");
    exit;
}

/* =====================
   UPDATE
===================== */
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["action"] === "update") {
    $stmt = $pdo->prepare(
        "UPDATE products SET name = ?, price = ?, stock = ? WHERE id = ?"
    );
    $stmt->execute([
        $_POST['name'],
        $_POST['price'],
        $_POST['stock'],
        $_POST['id']
    ]);
    header("Location: admin-produits.php");
    exit;
}

/* =====================
   PRODUIT À MODIFIER
===================== */
$produittoEdit = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $produittoEdit = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

?>

  <!DOCTYPE html>
<html>
<head>
 

</head>
<body></body>

<h1>Liste des produits</h1>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($tableau as $tab): ?>
        <tr>
            <td><?= htmlspecialchars($tab["name"]) ?></td>
            <td><?= $tab["price"] ?> €</td>
            <td><?= $tab["stock"] ?></td>
            <td>
                <a href="?edit=<?= $tab['id'] ?>">Modifier</a> |
                <a href="?delete=<?= $tab['id'] ?>"
                   onclick="return confirm('Supprimer ?')">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<hr>

<h2>Ajouter un produit</h2>
<form method="POST">
    <input type="hidden" name="action" value="add">

    <input type="text" name="name" placeholder="Nom" required>
    <input type="number" name="price" step="0.01" placeholder="Prix" required>
    <input type="number" name="stock" placeholder="Stock" required>

    <input type="submit" value="Ajouter produit">
</form>

<hr>

<h2>Modifier un produit</h2>
<form method="POST">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id"
           value="<?= $produittoEdit['id'] ?? '' ?>">

    <input type="text" name="name"
           value="<?= $produittoEdit['name'] ?? '' ?>"
           placeholder="Nom">

    <input type="number" name="price" step="0.01"
           value="<?= $produittoEdit['price'] ?? '' ?>"
           placeholder="Prix">

    <input type="number" name="stock"
           value="<?= $produittoEdit['stock'] ?? '' ?>"
           placeholder="Stock">

    <input type="submit" value="Modifier produit">
</form>






</body>
</html> 