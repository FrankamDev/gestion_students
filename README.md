# Gestion Académique – Laravel & Blade

## 🚀 Présentation

**Gestion Académique** est une application web développée avec **Laravel** et **Blade** pour la gestion complète d’un établissement académique. Elle permet d’administrer les étudiants, leurs inscriptions, modules, évaluations et bilans de compétences de manière structurée et efficace.

L’application fournit une interface **administrative** pour les gestionnaires et une interface **étudiant** pour suivre ses résultats et modules.

---

## Objectifs recherches

🎯 OBJECTIF DU SITE

Gérer les étudiants, leurs inscriptions, leurs évaluations, leurs bilans, et les modules / spécialités.

Fournir une interface administrative et une interface utilisateur (étudiants).

## 💡 Fonctionnalités principales

### 🔹 Dashboard Admin

-   Vue synthétique des étudiants, modules, évaluations et bilans
-   Graphiques de progression académique
-   Accès rapide aux CRUD

### 🔹 Gestion des utilisateurs

-   Ajouter, modifier, supprimer des étudiants et enseignants
-   Gestion des rôles et permissions
-   Authentification sécurisée

### 🔹 Gestion académique

-   Création et gestion des années académiques
-   Inscription des étudiants aux années (`est_inscrit`)
-   Suivi du statut des années

### 🔹 Évaluations et bilans

-   Gestion des évaluations par module
-   Calcul des moyennes par semestre et générale
-   Suivi des compétences et bilans

### 🔹 Modules et spécialités

-   CRUD complet pour modules et spécialités
-   Association des spécialités aux étudiants et modules

### 🔹 Bonus

-   Interface étudiant pour consulter ses résultats
-   Export PDF possible (optionnel)
-   Graphiques de performance

---

## 🏗️ Structure du projet

app/
├─ Http/
│ ├─ Controllers/
│ └─ Requests/
├─ Models/
resources/
├─ views/ # Templates Blade
├─ layouts/ # Layouts généraux
database/
├─ migrations/ # Migrations Laravel
routes/
├─ web.php # Routes web

---

## ⚡ Installation

1. Cloner le projet

```bash
git clone https://github.com/FrankamDev/gestion-students.git
cd gestion-students
```

2. Installer les dépendances

```bash
composer install
npm install
npm run dev
```

3. Configurer la base de données

Créer une base PostgreSQL

Copier .env.example en .env

Modifier les variables DB (DB_DATABASE, DB_USERNAME, DB_PASSWORD)

4. Lancer les migrations

php artisan migrate

5. Lancer le serveur

php artisan serve

🧩 # Technologies utilisées

Laravel 12 – Framework PHP

Blade – Moteur de templates Laravel

PostgreSQL – Base de données

Tailwind CSS – (optionnel pour le design)

PHP 8.3

Composer & NPM

🛡️ Sécurité

Authentification via Laravel Breeze

Hashage sécurisé des mots de passe

Gestion des rôles et permissions pour limiter l’accès aux fonctionnalités sensibles

📈 Roadmap

Finaliser les migrations et modèles

Créer les pages CRUD pour chaque entité

Ajouter le dashboard et les graphiques

Implémenter la vue étudiant

Ajouter export PDF et notifications (optionnel)

Tests et validation finale

📁 Contribuer

Fork le projet

Créer une branche :

git checkout -b feature/ma-fonctionnalité

Commit tes changements :

git commit -m "Ajout de ma fonctionnalité"

Push et ouvre une Pull Request
