# Plan d’exécution — Phase 1 Site marketing Agadir Concept

## But du document

Ce document sert de plan de pilotage opérationnel pour la Phase 1.

Il doit permettre à Codex de :
- savoir quoi construire,
- dans quel ordre,
- avec quels critères de validation,
- et à quel moment s’arrêter pour demander validation.

---

# 1. Règle de pilotage générale

Codex ne doit pas développer toute la Phase 1 en une seule fois.

Codex doit avancer par lots contrôlés, dans cet ordre :

1. analyser les documents,
2. confirmer le périmètre,
3. proposer l’architecture,
4. implémenter Sprint 0,
5. attendre validation,
6. passer au sprint suivant.

---

# 2. Méthode de travail obligatoire

Pour chaque sprint, Codex doit :

1. rappeler l’objectif du sprint,
2. lister ce qu’il va implémenter,
3. implémenter uniquement ce sprint,
4. documenter les fichiers créés/modifiés,
5. expliquer comment tester,
6. signaler les limites ou hypothèses,
7. attendre validation avant de poursuivre.

---

# 3. Sprints à exécuter

## Sprint 0 — Fondation
### Objectif
Créer la base technique et structurelle du site marketing.

### À livrer
- structure du projet
- couches séparées
- layout principal
- design system initial
- réglages globaux de base
- rôles admin de base
- structure des contenus
- base de la pré-intégration SaaS

### Validation attendue
- architecture claire
- base saine
- séparation des responsabilités réelle
- aucun mélange marketing / SaaS profond

---

## Sprint 1 — CMS de base
### Objectif
Rendre le back-office capable de gérer les contenus principaux.

### À livrer
- pages
- articles
- médias
- menus
- réglages globaux
- blocs réutilisables
- admin claire

### Validation attendue
- un non-développeur peut administrer les contenus principaux
- les types de contenus sont distincts
- l’UX admin est propre

---

## Sprint 2 — Pages marketing principales
### Objectif
Construire les pages publiques essentielles.

### À livrer
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

### Validation attendue
- positionnement clair
- design cohérent
- contenu structuré
- responsive de base fonctionnel

---

## Sprint 3 — Plateforme et modules
### Objectif
Présenter clairement la vision produit.

### À livrer
- page Plateforme
- page Modules
- page CRM
- page Project Manager
- page Espace client

### Validation attendue
- compréhension claire des futures briques
- pas de confusion avec des fonctionnalités déjà opérationnelles

---

## Sprint 4 — Formulaires et conversion
### Objectif
Mettre en place les parcours de conversion.

### À livrer
- formulaire contact
- formulaire devis
- formulaire brief site web
- formulaire brief application web
- formulaire domaine / hébergement
- formulaire audit / rendez-vous
- stockage local des soumissions
- notifications email
- pages de conversion associées

### Validation attendue
- les formulaires fonctionnent
- les soumissions sont stockées
- les emails partent
- l’expérience utilisateur est claire

---

## Sprint 5 — Pré-intégration SaaS
### Objectif
Préparer les échanges futurs avec le SaaS.

### À livrer
- couche d’intégration dédiée
- journal des transmissions
- statuts d’intégration
- mapping des événements
- structure de relance
- réglages endpoints / tokens
- stockage des références externes

### Validation attendue
- architecture d’intégration propre
- découplage respecté
- site autonome même sans SaaS

---

## Sprint 6 — QA / SEO / finition
### Objectif
Finaliser la Phase 1.

### À livrer
- responsive final
- accessibilité
- SEO technique
- optimisation technique
- nettoyage
- documentation minimale

### Validation attendue
- site stable
- premium
- maintenable
- SEO-ready
- accessible au niveau attendu

---

# 4. Règle d’arrêt obligatoire

Si une validation échoue, Codex doit :

- s’arrêter,
- corriger le lot concerné,
- ne pas continuer au sprint suivant.

---

# 5. Format attendu des retours de Codex

Pour chaque sprint, Codex doit répondre avec cette structure :

## Sprint traité
Nom du sprint

## Objectif du sprint
...

## Ce qui a été fait
...

## Fichiers créés ou modifiés
...

## Comment tester
...

## Limites / hypothèses
...

## Prêt pour validation
Oui / Non

---

# 6. Règle de prudence

Si une hypothèse structurante manque, Codex doit :
- la signaler,
- faire l’hypothèse la plus sobre,
- ne pas élargir le périmètre sans raison.

---

# 7. Résultat attendu

À la fin de la Phase 1, on doit disposer :
- d’un site marketing complet,
- d’un CMS exploitable,
- d’une base de conversion opérationnelle,
- d’une présentation claire de la future plateforme,
- d’une base prête pour la Phase 2.
