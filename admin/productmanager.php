<?php
class ProductManager
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function add(Product $mat)
    {
        $q = $this->db->prepare('INSERT INTO product (id, code, intitule, prix, descri, photo) VALUES (0, :code, :intitule, :prix, :descri, :photo)');
        $q->bindValue(':code', $mat->getCode());
        $q->bindValue(':intitule', $mat->getIntitule());
        $q->bindValue(':prix', $mat->getPrix());
        $q->bindValue(':descri', $mat->getDescri());
        $q->bindValue(':photo', $mat->getPhoto());
        
        $R = $q->execute();
        echo $this->db->lastInsertId();
        if (!$R) {
            echo "Echec insertion";
        } else {
            echo "Insertion réussie";
        }
    }

    public function get($id)
    {
        $id = (int) $id;
        $q = $this->db->query('SELECT * FROM product WHERE id = '.$id);
        if ($q->rowCount()) {
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            $pro = new Product($donnees['id'], $donnees['code'], $donnees['intitule'], $donnees['prix'], $donnees['descri'], $donnees['photo']);    
            return $pro;
        }
        return null;
    }

    public function update(Product $produit)
    {
        $sql = "UPDATE product SET code = :code, intitule = :intitule, prix = :prix, descri = :descri";

        if (isset($_FILES['photo']) && !empty($_FILES['photo']['name'])) {
            $sql .= ", photo = :photo";
        }

        $sql .= " WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':code', $produit->getCode(), PDO::PARAM_STR);
        $stmt->bindValue(':intitule', $produit->getIntitule(), PDO::PARAM_STR);
        $stmt->bindValue(':prix', $produit->getPrix(), PDO::PARAM_STR);
        $stmt->bindValue(':descri', $produit->getDescri(), PDO::PARAM_STR);

        if (isset($_FILES['photo']) && !empty($_FILES['photo']['name'])) {
            $stmt->bindValue(':photo', $this->uploadImage($_FILES['photo']), PDO::PARAM_STR);
        }

        $stmt->bindValue(':id', $produit->getId(), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete(Product $produit)
    {
        $sql = "DELETE FROM product WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $produit->getId(), PDO::PARAM_INT);
        $stmt->execute();
        $filename = '../images/' . $produit->getPhoto();
        if (file_exists($filename)) {
            $success = unlink($filename);
            if (!$success) {
                // wait for 500000 microseconds
                usleep(500000);
                unlink($filename);
            }
        }
    }

public function get_exist($id):bool
{
	$id = (int) $id;
	$q = $this->db->query('SELECT * FROM product WHERE id = '.$id);
	if($q->rowCount()){
		return true;
	} else {
		return false;
	}
}
private function uploadImage($file) {
    $target_dir = "../images/";
    $target_file = $target_dir . basename($file["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($file["tmp_name"]);
    if($check === false) {
        return "File is not an image.";
    }
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return $target_file;
    } else {
        return "Désolé,il etait un erreur quand on a uploder votre photo.";
    }
}

}
?>
