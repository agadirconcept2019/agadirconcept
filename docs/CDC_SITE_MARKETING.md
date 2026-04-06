# Cahier des charges — Site marketing Agadir Concept

## Version
V1.0 — cadrage fonctionnel complet

## Statut
Base de référence à transmettre à Codex pour la Phase 1 : Site marketing

---

# 1. Vision globale du projet

Le projet Agadir Concept est structuré en 3 briques distinctes mais interconnectées :

1. Site marketing
   - rôle : acquisition, conversion, présentation de l’offre, prise de contact, demande de devis, prise de commande, publication de contenu, présentation de la plateforme et des modules.
   - objectif : générer des leads, des commandes et des demandes qualifiées.

2. SaaS métier
   - rôle : gestion opérationnelle interne et externe.
   - structure : Core + modules.
   - modules V1 prévus : CRM et Project Manager.

3. Portail client
   - rôle : suivi des projets, commandes, documents, validations, demandes et support.

Le présent cahier des charges couvre uniquement la Phase 1 : Site marketing, tout en préparant proprement les connexions futures avec le Core SaaS, les modules et le portail client.

---

# 2. Avis sur l’ordre de développement

L’ordre suivant est cohérent et recommandé :

- Phase 1 : Site marketing
- Phase 2 : Core SaaS + modules V1
- Phase 3 : Portail client

## Ajustement stratégique indispensable

Avant de coder le site marketing, il faut figer les contrats d’intégration minimaux avec le futur SaaS.

Le site marketing doit déjà être conçu pour :

- créer un lead dans le CRM,
- créer un contact,
- créer une entreprise/société,
- créer une demande de devis,
- créer une commande brouillon ou une demande projet,
- transmettre un brief,
- conserver les identifiants de synchronisation,
- afficher plus tard des liens vers l’espace client.

## Conclusion

Oui, commencer par le site marketing est une bonne décision, mais il ne doit pas être conçu comme un site isolé. Il doit être conçu dès le départ comme la porte d’entrée commerciale du futur écosystème.

---

# 3. Objectifs de la Phase 1 — Site marketing

## Objectif principal

Créer un site marketing premium, administrable comme un vrai CMS, orienté conversion, prêt à être connecté au futur SaaS.

## Objectifs détaillés

Le site marketing doit permettre de :

- présenter clairement Agadir Concept,
- présenter les services actuels et futurs,
- présenter la future plateforme SaaS,
- présenter les modules métier,
- publier des contenus éditoriaux,
- publier des études de cas / réalisations,
- recevoir des demandes de contact,
- recevoir des demandes de devis,
- recevoir des briefs projet,
- permettre certaines prises de commande,
- envoyer automatiquement les données vers le futur SaaS,
- offrir une expérience premium, claire, moderne, crédible et orientée business.

---

# 4. Principes d’architecture à respecter

## 4.1 Séparation stricte des responsabilités

Le site marketing ne doit pas contenir la logique métier profonde du SaaS.

### Le site marketing gère
- contenu,
- pages publiques,
- conversion,
- formulaires,
- demandes,
- commandes,
- contenus marketing,
- SEO,
- analytics,
- redirection vers les espaces connectés.

### Le SaaS gèrera plus tard
- CRM,
- pipeline commercial,
- projets,
- tâches,
- commandes validées,
- facturation,
- suivi client,
- support,
- documents,
- reporting.

## 4.2 CMS “comme WordPress”

Le site marketing doit offrir une expérience d’administration très proche de WordPress sur les usages essentiels.

### Cela signifie
- gestion des pages,
- gestion des articles,
- gestion des médias,
- gestion des menus,
- gestion des réglages,
- gestion de blocs/sections réutilisables,
- gestion des formulaires,
- gestion de modèles de pages,
- édition simple et efficace des contenus.

## 4.3 Connexion future au SaaS

Le site marketing doit être pensé dès V1 avec :
- une couche d’intégration API,
- un mapping clair des formulaires,
- une journalisation des synchronisations,
- une gestion des erreurs de transmission,
- une possibilité de rejouer une transmission échouée,
- une capacité future à afficher des statuts venant du SaaS.

---

# 5. Positionnement commercial à refléter sur le site

Le site doit positionner Agadir Concept comme :

Agence de développement web et d’applications métier, appuyée par une plateforme SaaS modulaire de gestion client et projet.

## Services principaux à mettre en avant

1. Développement web
2. Développement d’applications web
3. Hébergement & noms de domaine
4. Maintenance & support
5. Automatisation & intégrations

## Services non prioritaires / non principaux

- SEO : à intégrer comme section et/ou page complémentaire, mais pas comme pilier central du menu.
- Conception graphique : supprimée du catalogue principal.
- Réseaux sociaux : supprimés du catalogue principal.

---

# 6. Utilisateurs et rôles du site marketing

## 6.1 Rôles côté administration

### Super Admin
Accès complet à tout.

### Admin Contenu
- pages,
- articles,
- médias,
- menus,
- formulaires,
- SEO,
- témoignages,
- réalisations,
- FAQ.

### Admin Commercial
- leads reçus,
- demandes de devis,
- commandes,
- briefs,
- exports,
- journal des transmissions API.

### Éditeur
- création et modification de contenus,
- sans accès aux réglages sensibles.

## 6.2 Utilisateurs publics

### Visiteur anonyme
- consultation des pages,
- remplissage de formulaires,
- demande de devis,
- commande simple,
- consultation des modules,
- accès au formulaire de brief.

### Prospect identifié
- peut avoir reçu un lien sécurisé vers un brief ou une étape de qualification.

### Client connecté
Pas géré pleinement dans la Phase 1, mais le site doit prévoir :
- bouton “Connexion”,
- redirection vers futur portail client,
- éventuellement plus tard SSO ou pont d’authentification.

---

# 7. Périmètre fonctionnel du site marketing

## 7.1 Pages publiques principales

Le site doit inclure au minimum les pages suivantes :

- Accueil
- Services
- Développement web
- Développement d’applications web
- Hébergement & noms de domaine
- Maintenance & support
- Automatisation & intégrations
- Plateforme
- Modules
- Module CRM
- Module Project Manager
- Espace client
- Réalisations / Études de cas
- Blog / Articles
- À propos
- Contact
- Demande de devis
- Commander un service
- Brief projet
- Connexion
- FAQ
- Mentions légales
- Politique de confidentialité
- CGV / CGU si nécessaire

---

# 8. Arborescence recommandée

## Menu principal
- Accueil
- Services
- Plateforme
- Modules
- Réalisations
- Blog
- À propos
- Contact
- Connexion

## Menu secondaire / footer
- Demande de devis
- Commander un service
- Brief projet
- FAQ
- Mentions légales
- Politique de confidentialité
- CGV / CGU

---

# 9. Fonctionnalités CMS attendues

Le site marketing doit être administrable facilement par un non-développeur.

## 9.1 Gestion des pages
- créer / modifier / supprimer une page
- brouillon / publié
- slug personnalisable
- titre SEO si prévu
- méta-description si prévue
- aperçu avant publication
- duplication d’une page
- modèles de pages / templates

## 9.2 Gestion des articles
- catégories
- tags si utiles
- image mise en avant
- auteur
- date
- brouillon / publié / planifié
- SEO de base

## 9.3 Gestion des médias
- upload images / pdf
- bibliothèque média
- alt text
- titre
- légende
- compression / optimisation si possible

## 9.4 Gestion des menus
- création / modification de menus
- menu principal
- menu footer
- ordre glisser-déposer si possible
- liens internes / externes

## 9.5 Blocs / sections réutilisables
- hero
- CTA
- témoignages
- FAQ
- tableau comparatif
- grille services
- logos clients
- sections de présentation

## 9.6 Réglages globaux
- identité du site
- logo
- favicon
- couleurs principales
- coordonnées
- scripts globaux
- paramètres SEO globaux
- configuration email
- configuration API futur SaaS

## 9.7 Gestion des formulaires
- créer plusieurs formulaires
- définir les champs
- définir les validations
- définir le destinataire email
- définir le mapping futur vers le SaaS
- stocker les soumissions
- exporter les soumissions
- journaliser les statuts d’envoi vers le SaaS

---

# 10. Types de formulaires obligatoires

## 10.1 Formulaire de contact général
- nom
- prénom
- entreprise
- email
- téléphone
- service concerné
- message
- consentement

## 10.2 Formulaire de demande de devis
- nom
- prénom
- entreprise
- email
- téléphone
- type de projet
- budget indicatif
- délai souhaité
- description du besoin
- besoin de maintenance ?
- besoin d’hébergement ?
- consentement

## 10.3 Formulaire de brief site web
- type de site
- activité
- objectifs
- nombre de pages estimé
- langues
- inspirations
- fonctionnalités nécessaires
- contenus disponibles ou non
- délai
- budget

## 10.4 Formulaire de brief application web
- secteur
- type d’application
- utilisateurs concernés
- fonctionnalités attendues
- niveau de complexité
- outils existants à connecter
- besoin d’espace client
- besoin de reporting
- besoin de notifications
- budget
- délai

## 10.5 Formulaire commande hébergement / domaine
- nom
- entreprise
- email
- téléphone
- type d’action : réservation / transfert / renouvellement
- domaine souhaité
- offre d’hébergement souhaitée
- besoins email

## 10.6 Formulaire d’audit / prise de rendez-vous
- type d’audit
- objectif
- créneau souhaité
- canal préféré

---

# 11. Logique de conversion et flux métier à préparer

Chaque point d’entrée du site doit pouvoir être rattaché à une logique métier exploitable.

Le site marketing devra être capable de transmettre vers le SaaS au minimum :

- Lead
- Contact
- Entreprise
- Demande de devis
- Demande de brief
- Commande brouillon
- Pré-projet / opportunité

Chaque transmission doit être traçable avec :
- date/heure
- type d’événement
- payload simplifié
- statut
- message de succès/erreur
- possibilité de relance manuelle

---

# 12. Fonctionnalité “Commander un service”

## Objectif
Permettre à un client/prospect de commander ou précommander un service.

## Cas couverts
- demande simple sans paiement
- commande avec acompte plus tard
- commande avec collecte de brief
- commande avec génération d’une demande projet

## Fonctionnement attendu en V1
- sélection d’un service
- sélection d’une formule si nécessaire
- saisie des informations client
- saisie du besoin
- soumission
- stockage local
- notification interne
- préparation de synchronisation future

---

# 13. Présentation de la plateforme SaaS sur le site marketing

Le site marketing doit déjà vendre la future plateforme, même si elle est développée dans un second temps.

Il doit expliquer :
- qu’il existe une plateforme interne / client
- qu’elle est modulaire
- qu’elle permet le suivi de projet
- qu’elle centralise CRM et Project Manager
- qu’elle améliore la relation client
- qu’elle professionnalise le déroulement des projets

Prévoir des libellés clairs du type :
- Disponible
- En déploiement
- Bientôt disponible

---

# 14. Espace client — préparation côté site marketing

Le portail client sera développé après, mais le site marketing doit l’anticiper.

Le site marketing doit déjà prévoir :
- un bouton “Connexion”
- une page “Espace client”
- une présentation fonctionnelle du portail
- des CTA vers la connexion
- une architecture de liens prête pour la redirection vers le portail
- la possibilité future d’un SSO ou d’un pont d’authentification

---

# 15. Données et contenus à gérer dans le CMS

Le CMS doit gérer au minimum les entités suivantes :
- pages
- articles
- services
- modules
- réalisations / études de cas
- témoignages
- FAQ
- formulaires
- soumissions

---

# 16. Exigences UX/UI

Le site doit refléter une image :
- premium
- professionnelle
- moderne
- claire
- rassurante
- crédible
- structurée
- orientée conversion

Le site doit être parfaitement exploitable sur :
- desktop
- tablette
- mobile

## Accessibilité
- HTML sémantique
- contrastes suffisants
- navigation clavier
- labels explicites
- états de focus visibles
- alt text pour les images utiles
- formulaires accessibles

---

# 17. Exigences SEO

Le site doit être SEO-ready :
- URLs propres
- balise title configurable
- meta description configurable
- Hn cohérents
- sitemap
- robots.txt
- maillage interne
- balises alt
- données structurées si pertinent
- performance correcte
- pages services optimisées
- blog optimisable

---

# 18. Exigences techniques transverses

## Sécurité
- validation stricte des entrées
- protection CSRF sur les formulaires
- protection anti-spam
- sécurisation des uploads
- limitation des tentatives abusives
- configuration sécurisée des emails
- gestion propre des rôles admin

## Performance
- images optimisées
- chargement conditionnel des assets
- cache si applicable
- structure frontend performante
- éviter scripts inutiles

## Maintenabilité
- architecture modulaire
- séparation claire frontend / admin / intégration
- code lisible
- conventions claires
- composants réutilisables

## Journalisation
Prévoir au minimum des logs pour :
- erreurs formulaires
- erreurs email
- erreurs transmission API
- actions manuelles de relance

---

# 19. Intégration future avec le Core SaaS

Le site marketing devra plus tard communiquer avec le SaaS via API.

Prévoir dès V1 :
- une couche service d’intégration dédiée
- configuration de endpoints
- configuration des clés/API tokens
- mapping par type de formulaire
- storage des identifiants externes
- relance manuelle d’une transmission
- statuts : non envoyé / envoyé / échec / à relancer

Événements métiers à anticiper :
- contact créé
- devis demandé
- brief reçu
- commande créée
- rendez-vous demandé

---

# 20. Emails et notifications

Le site doit gérer au minimum :
- email de confirmation visiteur
- email interne de notification
- email d’accusé de réception devis
- email après brief
- email après commande
- email de demande de complément si nécessaire

---

# 21. Analytics et suivi marketing

Le site doit permettre :
- suivi des conversions
- suivi des soumissions formulaires
- suivi des clics CTA principaux
- suivi des pages les plus performantes
- suivi du trafic

Événements à tracer :
- clic devis
- clic commander
- envoi formulaire contact
- envoi formulaire devis
- envoi brief site
- envoi brief application
- clic connexion
- clic démonstration plateforme

---

# 22. Contenus légaux et conformité

Le site doit comporter au minimum :
- Mentions légales
- Politique de confidentialité
- gestion du consentement sur formulaires
- mentions relatives à la collecte des données
- CGV/CGU si commande ou prise d’acompte ultérieure

---

# 23. Hors périmètre de la Phase 1

Sont hors périmètre de la Phase 1 :
- CRM opérationnel complet
- pipeline commercial complet
- gestion avancée des projets
- tâches réelles
- facturation réelle
- support tickets complet
- portail client opérationnel complet
- authentification unifiée SaaS complète
- moteur d’abonnement SaaS complet
- automatisations métier avancées

La Phase 1 doit préparer ces fonctions, pas les implémenter complètement.

---

# 24. Livrables attendus de Codex pour la Phase 1

Codex doit produire une base propre comprenant au minimum :
1. structure complète du site marketing
2. back-office CMS fonctionnel
3. gestion des pages
4. gestion des articles
5. gestion des médias
6. gestion des menus
7. gestion des formulaires
8. pages publiques principales
9. pages services
10. pages plateforme/modules
11. journal minimal des soumissions
12. couche de préparation à l’intégration SaaS
13. réglages globaux
14. design responsive premium
15. documentation minimale d’installation et d’utilisation

---

# 25. Règles de qualité à imposer à Codex

## Règles non négociables
- ne pas mélanger la logique marketing et la logique métier SaaS
- architecture propre
- code maintenable
- composants réutilisables
- sécurité des formulaires
- responsive complet
- accessibilité minimale réelle
- pas de hacks
- pas de code mort
- pas d’UI incohérente entre les pages
- pas de dépendance inutile

## Règles de livraison
- livrer par lots cohérents
- toujours préserver les acquis validés
- aucune régression visuelle ou fonctionnelle
- documenter ce qui est livré
- signaler clairement le périmètre réalisé et restant

---

# 26. Plan de développement recommandé pour Codex

## Sprint 0 — Fondation
- architecture projet
- routes
- layout principal
- design system
- rôles admin de base
- réglages globaux

## Sprint 1 — CMS de base
- pages
- articles
- médias
- menus
- templates

## Sprint 2 — Pages marketing principales
- accueil
- services
- pages services détaillées
- à propos
- contact

## Sprint 3 — Plateforme et modules
- page plateforme
- page modules
- pages CRM / PM / espace client

## Sprint 4 — Formulaires et conversion
- contact
- devis
- briefs
- commande
- stockage soumissions
- emails

## Sprint 5 — Pré-intégration SaaS
- journal des transmissions
- couche API préparatoire
- mapping des événements
- réglages d’intégration

## Sprint 6 — SEO / QA / finition
- SEO technique
- responsive final
- accessibilité
- tests
- documentation

---

# 27. Critères d’acceptation de la Phase 1

La Phase 1 sera considérée comme réussie si :
1. le site présente clairement les services
2. le site présente clairement la future plateforme
3. le site dispose d’un vrai back-office CMS exploitable
4. les pages principales sont administrables
5. les formulaires fonctionnent correctement
6. les demandes sont stockées et traçables
7. la future connexion SaaS est préparée proprement
8. le design est premium et responsive
9. aucune confusion n’existe entre site marketing et SaaS
10. la base livrée est suffisamment propre pour lancer ensuite le Core SaaS sans refonte du site marketing

---

# 28. Décisions fonctionnelles déjà figées

Les décisions suivantes sont validées :
- Conception Graphique : supprimé du catalogue principal
- Conception de sites web : remplacé par Développement web
- Noms de domaines + Hébergement web : fusionnés en Hébergement & noms de domaine
- Référencement SEO : repositionné comme section complémentaire
- Réseaux sociaux : supprimés du catalogue principal
- Le projet global comporte 3 briques : Site marketing + SaaS + Portail client
- Le SaaS est séparé du site marketing
- Le site marketing doit pouvoir alimenter le futur SaaS
- Le futur SaaS suit une logique Core + modules
- Modules V1 prévus : CRM et Project Manager
- Un espace client / portail client est prévu après le Core SaaS

---

# 29. Recommandation finale à Codex

Le site marketing ne doit pas être développé comme une simple vitrine.

Il doit être développé comme :

la couche commerciale, éditoriale et de conversion d’un écosystème digital plus large.

Le résultat attendu n’est donc pas seulement un beau site, mais une base marketing premium, administrable, extensible, connectable, durable et prête pour les futures phases SaaS.

---

# 30. Résumé exécutif

## Phase 1 = Site marketing
À construire maintenant.

### Il doit faire 5 choses :
1. Présenter l’entreprise et les services
2. Présenter la plateforme et les modules
3. Convertir les visiteurs en prospects / commandes
4. Être administrable comme un vrai CMS
5. Préparer proprement l’intégration future avec le SaaS

## Phases suivantes
- Phase 2 : Core SaaS + modules V1
- Phase 3 : Portail client

Ce cahier des charges constitue la base de travail officielle pour lancer la Phase 1 avec Codex.
