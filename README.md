# 🛠️ Eco-Sanit-TP · Site vitrine Laravel

![Laravel](https://img.shields.io/badge/Laravel-11-red)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-blue)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-brightgreen)
![License](https://img.shields.io/badge/License-MIT-lightgrey)

**Eco-Sanit-TP** est un site vitrine responsive, moderne et léger, conçu pour une entreprise de travaux publics.  
Ce projet Laravel met l'accent sur l'expérience utilisateur, la simplicité d’administration et l’esthétique professionnelle.

---

## 🌟 Fonctionnalités

- ⚙️ Interface d’administration minimale
- 📷 Gestion dynamique des photos du site
- ✉️ Formulaire de contact avec envoi d’email et lecture en admin
- 🌙 Dark mode / Light mode (par défaut en sombre)
- 🖼️ Galerie d’accueil triable selon l’ordre souhaité

---

## 🚀 Installation rapide

```bash
git clone https://github.com/votre-utilisateur/eco-sanit-tp.git
cd eco-sanit-tp

cp .env.example .env
composer install
npm install && npm run dev

php artisan key:generate
php artisan migrate
php artisan storage:link

---

📚 Documentation
🔧 Admin
Accès : /admin

Authentification : désactivée ou minimale (peut être renforcée)

Fonctionnalités :

Voir tous les messages du formulaire de contact

Gérer les photos (ajout, suppression)

🌄 Gestion des photos
Les photos sont stockées dans storage/app/public/photos

Un lien symbolique est généré via php artisan storage:link

Le tri d’affichage est personnalisable dans le contrôleur d’accueil

🌑 Dark Mode
Géré par Alpine.js + localStorage

Activé par défaut

Un bouton toggle est accessible dans le layout

📩 Formulaire de contact
Route : /contact ou intégré sur la page d’accueil

Envoi d’email via Mail::to(...) avec configuration .env

Sauvegarde des messages côté BDD pour consultation dans l’admin

🧪 Développement
Démarrage local
bash
Copier
Modifier
npm run dev
php artisan serve
Build pour production
bash
Copier
Modifier
npm run build
🔒 Sécurité & RGPD
Aucune donnée personnelle n’est visible publiquement

Les messages reçus ne sont stockés que temporairement

La politique de confidentialité est à compléter dans /mentions-legales

🔭 Prochaines améliorations
 Drag & drop pour trier les photos depuis l’admin

 Notification admin (badge "non lus")

 Intégration d'une map dynamique

 Ajout d’un blog d’actualité (optionnel)

👤 Auteur
Pierre Plé 
Développeur Laravel junior
 🦇 

📄 Licence
Ce projet est sous licence MIT.