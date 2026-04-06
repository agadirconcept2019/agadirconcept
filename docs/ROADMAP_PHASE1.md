# Roadmap — Phase 1 Site marketing Agadir Concept

## Objectif général

Construire la Phase 1 du projet Agadir Concept :

- un site marketing premium,
- administrable comme un CMS,
- orienté conversion,
- prêt à se connecter plus tard au futur SaaS,
- sans intégrer prématurément la logique métier du SaaS.

---

# Vision de la Phase 1

La Phase 1 doit produire une base solide pour :

1. présenter l’entreprise et les services,
2. présenter la future plateforme SaaS,
3. présenter les futurs modules,
4. capter des leads et demandes qualifiées,
5. préparer la connexion future avec le Core SaaS.

La Phase 1 ne doit pas implémenter :
- le Core SaaS complet,
- le CRM complet,
- le Project Manager complet,
- le portail client complet.

---

# Découpage par sprints

## Sprint 0 — Fondation

### Objectif
Mettre en place la base technique et structurelle du site marketing.

### Contenu
- structure du projet
- organisation frontend / admin / intégration
- layout principal
- design system initial
- réglages globaux
- rôles admin de base
- conventions de code
- architecture des types de contenus
- structure de persistance locale minimale
- base de la couche de pré-intégration SaaS

### Résultat attendu
Une fondation propre, stable et évolutive.

---

## Sprint 1 — CMS de base

### Objectif
Construire les fonctionnalités essentielles d’administration.

### Contenu
- gestion des pages
- gestion des articles
- gestion des médias
- gestion des menus
- gestion des réglages globaux
- gestion des blocs / sections réutilisables
- structure admin exploitable par un non-développeur

### Résultat attendu
Un CMS marketing fonctionnel pour gérer les contenus principaux.

---

## Sprint 2 — Pages marketing principales

### Objectif
Mettre en place les pages publiques principales du site.

### Contenu
- Accueil
- Services
- Développement web
- Développement d’applications web
- Hébergement & noms de domaine
- Maintenance & support
- Automatisation & intégrations
- À propos
- Contact
- FAQ
- pages légales

### Résultat attendu
Le site marketing présente clairement l’offre et le positionnement.

---

## Sprint 3 — Plateforme et modules

### Objectif
Présenter la logique produit sans développer le SaaS lui-même.

### Contenu
- page Plateforme
- page Modules
- page Module CRM
- page Module Project Manager
- page Espace client
- sections “bientôt disponible” / “en déploiement” si nécessaire
- CTA vers démo, devis, prise de contact

### Résultat attendu
Le site explique clairement la vision produit et les briques futures.

---

## Sprint 4 — Formulaires et conversion

### Objectif
Mettre en place les parcours de conversion marketing.

### Contenu
- formulaire de contact
- formulaire de demande de devis
- formulaire de brief site web
- formulaire de brief application web
- formulaire de commande hébergement / domaine
- formulaire d’audit / prise de rendez-vous
- page Demande de devis
- page Commander un service
- page Brief projet
- emails de notification
- stockage local des soumissions

### Résultat attendu
Le site peut transformer les visiteurs en leads et demandes exploitables.

---

## Sprint 5 — Pré-intégration SaaS

### Objectif
Préparer proprement l’échange futur entre le site marketing et le SaaS.

### Contenu
- couche d’intégration dédiée
- mapping des événements
- journal d’intégration
- statuts d’intégration
- structure de relance
- configuration des endpoints futurs
- configuration des clés/API tokens
- stockage des références externes
- architecture d’idempotence

### Résultat attendu
Le site marketing est SaaS-ready sans dépendre encore du SaaS réel.

---

## Sprint 6 — QA, SEO et finition

### Objectif
Stabiliser, optimiser et finaliser la Phase 1.

### Contenu
- responsive final
- accessibilité
- SEO technique
- performance
- tests fonctionnels
- cohérence UI
- nettoyage technique
- documentation minimale

### Résultat attendu
Une Phase 1 propre, présentable, maintenable et prête pour validation.

---

# Ordre de priorité

## Priorité 1
- fondation
- CMS de base
- pages principales

## Priorité 2
- pages plateforme / modules
- formulaires et conversion

## Priorité 3
- pré-intégration SaaS
- QA / SEO / finition

---

# Dépendances logiques

## Dépendances fortes
- Sprint 0 avant tout le reste
- Sprint 1 avant édition réelle du contenu
- Sprint 4 après la structure CMS et les pages principales
- Sprint 5 après définition claire des formulaires et objets métiers
- Sprint 6 en dernier

---

# Critères de validation par sprint

## Sprint 0 validé si
- la structure technique est claire,
- les couches sont séparées,
- les bases du CMS existent,
- les réglages globaux sont cadrés,
- la base de pré-intégration SaaS est prévue.

## Sprint 1 validé si
- les contenus principaux sont administrables,
- l’admin est claire,
- les types de contenus sont bien séparés.

## Sprint 2 validé si
- les pages principales existent,
- le positionnement est compréhensible,
- le rendu est cohérent.

## Sprint 3 validé si
- la plateforme et les modules sont bien présentés,
- aucune confusion n’existe avec un SaaS déjà complet.

## Sprint 4 validé si
- les formulaires fonctionnent,
- les soumissions sont stockées,
- les notifications partent correctement.

## Sprint 5 validé si
- l’architecture d’échange futur est propre,
- les logs et statuts existent,
- la structure de mapping est claire.

## Sprint 6 validé si
- le site est responsive,
- propre,
- accessible,
- SEO-ready,
- stable.

---

# Résultat final attendu de la Phase 1

À la fin de la Phase 1, Agadir Concept doit disposer :

- d’un vrai site marketing,
- d’un CMS exploitable,
- d’un système de conversion opérationnel,
- d’une présentation claire de la future plateforme,
- d’une base technique prête pour la Phase 2.

---

# Phases suivantes

## Phase 2
- Core SaaS
- CRM
- Project Manager

## Phase 3
- Portail client

Ces phases doivent être développées séparément du site marketing, tout en se connectant à lui proprement.
