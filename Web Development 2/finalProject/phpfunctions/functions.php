<?php

function consoleName($db) {  
  $query = "select name from consoles";
  $statement = $db->prepare($query);
  $statement->execute();
  $name = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
  return $name;
}

function getSeries($db) {  
  $query = "select s_name from series";
  $statement = $db->prepare($query);
  $statement->execute();
  $name = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
  return $name;
}

function getPublisher($db) {  
  $query = "select * from publisher";
  $statement = $db->prepare($query);
  $statement->execute();
  $name = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
  return $name;
}

function getGames($db) {  
  $query = "select * from games";
  $statement = $db->prepare($query);
  $statement->execute();
  $games = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
  return $games;
}

function getConsoles($db) {  
  $query = "select * from consoles";
  $statement = $db->prepare($query);
  $statement->execute();
  $console = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
  return $console;
}

function addToCart($db, $cartID, $username, $itemid, $serialNumber, $quanity ) {
	$query = "insert into cart values (:cartID, :username, :itemid, :serialNumber, :quanity)";
  $statement = $db->prepare($query);
  $statement->bindValue(':cartID', $cartID);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':itemid', $itemid);
	$statement->bindValue(':serialNumber', $serialNumber);
	$statement->bindValue(':quanity', $quanity);
  $statement->execute();
  $cart = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
}

function showCart($db){
	$query = "select * from cart";
  $statement = $db->prepare($query);
  $statement->execute();
  $cart = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
  return $cart;
}

function showGamesInCart($db, $itemid){
	$query = "select games.name, games.price, cart.quanity from cart INNER JOIN games ON cart.item_ID = games.item_ID where cart.item_ID = :itemid)";
	$statement = $db->prepare($query);
	$statement->bindValue(':itemid', $itemid);
  $statement->execute();
  $cart = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
	return $cart;
}


?>