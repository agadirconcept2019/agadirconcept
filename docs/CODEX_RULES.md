# Règles de travail Codex — Agadir Concept

## Objectif

Ces règles sont obligatoires pour la Phase 1 du projet Agadir Concept.

La Phase 1 concerne uniquement le **site marketing**.

Le but de ces règles est d’éviter :
- les régressions,
- les mélanges d’architecture,
- les erreurs de périmètre,
- les décisions implicites non contrôlées,
- le code non maintenable.

---

# 1. Règles de périmètre

## 1.1 Périmètre autorisé

Codex peut travailler sur :

- les pages publiques du site marketing
- le CMS / back-office marketing
- les contenus marketing
- les pages services
- les pages plateforme et modules
- le blog / articles
- les médias
- les menus
- les blocs / sections réutilisables
- les formulaires
- la capture de leads
- les demandes de devis
- les briefs projet
- les commandes ou précommandes initiales
- les emails de notification
- le stockage local des soumissions
- la préparation de la couche d’intégration avec le futur SaaS
- la journalisation des transmissions futures
- la structure SEO-ready
- le responsive
- les bases d’accessibilité
- les bases de performance
- les pages légales

## 1.2 Hors périmètre

Codex ne doit pas implémenter maintenant :

- le Core SaaS complet
- le CRM complet
- le Project Manager complet
- le portail client complet
- la facturation métier complète
- le support ticketing complet
- l’authentification unifiée complète
- les automatisations métier avancées
- le runtime complet de modules SaaS

Ces éléments peuvent être préparés structurellement, mais pas développés réellement dans la Phase 1.

---

# 2. Règles d’architecture

## 2.1 Séparation stricte des couches

Codex doit séparer clairement :

- frontend public
- admin CMS
- gestion locale des contenus
- gestion locale des formulaires
- persistance locale des soumissions
- couche email/notifications
- couche d’intégration future vers le SaaS

Il ne faut pas mélanger toutes ces responsabilités dans les mêmes fichiers ou composants sans structure claire.

## 2.2 Le site marketing doit rester autonome

Le site marketing doit fonctionner même si le futur SaaS n’existe pas encore ou n’est pas disponible.

Toute soumission doit pouvoir :
- être validée
- être enregistrée localement
- notifier l’équipe
- préparer une synchronisation future
- afficher un statut d’intégration

## 2.3 Préparer sans sur-implémenter

Codex doit préparer la connexion future avec le SaaS sans développer maintenant la logique métier SaaS complète.

---

# 3. Règles CMS

## 3.1 Le CMS doit être simple pour un non-développeur

L’administration doit être :
- claire
- logique
- facile à comprendre
- exploitable sans compétence technique avancée

## 3.2 Types de contenus à séparer clairement

Le CMS doit distinguer proprement :
- pages
- articles
- services
- modules
- réalisations / études de cas
- témoignages
- FAQ
- formulaires
- soumissions
- journaux d’intégration

## 3.3 Gestion propre des réglages

Les réglages globaux doivent être séparés des contenus :
- identité du site
- coordonnées
- emails
- SEO global
- scripts globaux
- réglages d’intégration future
- branding de base

---

# 4. Règles UI / UX

## 4.1 Cohérence visuelle obligatoire

Toutes les pages doivent partager le même langage visuel :
- hiérarchie cohérente
- espacements cohérents
- boutons cohérents
- formulaires cohérents
- sections cohérentes
- responsive cohérent

## 4.2 Niveau de qualité attendu

Le rendu doit être :
- premium
- professionnel
- moderne
- élégant
- lisible
- orienté conversion

## 4.3 Formulaires

Les formulaires doivent être :
- clairs
- accessibles
- rassurants
- lisibles
- bien validés
- cohérents visuellement avec le reste du site

---

# 5. Règles techniques

## 5.1 Sécurité

Toujours appliquer :
- validation stricte des entrées
- protection CSRF
- contrôle d’accès sur les zones admin
- protection anti-spam sur les formulaires
- sécurisation des uploads
- gestion sûre des erreurs

## 5.2 Accessibilité

Toujours appliquer :
- HTML sémantique
- labels explicites
- navigation clavier
- focus visibles
- contrastes corrects
- formulaires accessibles

## 5.3 Performance

Toujours préférer :
- assets optimisés
- images optimisées
- chargement conditionnel
- composants réutilisables
- limitation des scripts inutiles

## 5.4 Maintenabilité

Toujours préférer :
- architecture modulaire
- composants réutilisables
- code lisible
- conventions cohérentes
- faible couplage
- pas de hacks
- pas de code mort

---

# 6. Règles d’intégration Marketing → SaaS

## 6.1 Couche d’intégration dédiée

Tout ce qui concerne les échanges avec le futur SaaS doit passer par une couche dédiée.

## 6.2 Pas de couplage fort

Le site marketing ne doit pas dépendre techniquement du SaaS pour fonctionner côté utilisateur.

## 6.3 Traçabilité obligatoire

Chaque tentative d’envoi futur vers le SaaS doit être traçable.

## 6.4 Statuts explicites

Prévoir des statuts clairs :
- pending
- sent
- failed
- retry_required
- synced

## 6.5 Idempotence à prévoir

Une même soumission ne doit pas être dupliquée si elle est relancée techniquement.

---

# 7. Règles de livraison

## 7.1 Livraison par lots cohérents

Codex doit toujours livrer des ensembles fonctionnels cohérents.

## 7.2 Zéro régression

Aucune fonctionnalité validée ne doit être cassée par un lot suivant.

## 7.3 Documentation minimale obligatoire

Pour chaque lot livré, Codex doit indiquer :
- ce qui a été ajouté
- ce qui a été modifié
- ce qui reste à faire
- comment tester

## 7.4 Pas de promesse trompeuse

Codex ne doit pas laisser croire qu’une fonctionnalité future est déjà réellement opérationnelle si ce n’est pas le cas.

## 7.5 Hypothèses explicites

Toute hypothèse structurante doit être signalée clairement.

---

# 8. Ordre d’exécution recommandé

Sauf instruction contraire, Codex doit suivre cet ordre :

1. Fondation
2. CMS de base
3. Pages marketing principales
4. Pages plateforme / modules
5. Formulaires et conversion
6. Pré-intégration SaaS
7. QA / SEO / accessibilité / finition

---

# 9. Définition du terminé pour la Phase 1

La Phase 1 est considérée réussie seulement si :

- le site marketing est pleinement exploitable seul
- le CMS est exploitable par un non-développeur
- les pages principales sont éditables
- les formulaires fonctionnent correctement
- les soumissions sont stockées localement
- la future intégration SaaS est préparée proprement
- aucune logique métier SaaS profonde n’est embarquée à tort dans le site marketing
- l’interface est premium et responsive
