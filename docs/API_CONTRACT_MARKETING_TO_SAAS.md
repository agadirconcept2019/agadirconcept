# Contrat d’intégration — Marketing → SaaS

## Objectif

Ce document définit la manière dont le site marketing Agadir Concept devra communiquer plus tard avec le futur SaaS.

Le but est de :
- garantir une structure stable,
- éviter les ambiguïtés,
- faciliter le développement du Core SaaS,
- standardiser les échanges,
- rendre le site marketing autonome même si le SaaS n’est pas encore disponible.

---

# 1. Principes fondamentaux

## 1.1 Le site marketing reste autonome

Si le SaaS n’est pas disponible, les soumissions doivent quand même :
- être enregistrées localement,
- être consultables côté administration,
- être notifiables,
- pouvoir être resynchronisées plus tard.

## 1.2 L’intégration doit être découplée

Le site marketing ne doit pas dépendre d’une réponse temps réel obligatoire du SaaS pour afficher un succès côté utilisateur.

## 1.3 Référence locale obligatoire

Chaque soumission doit disposer d’un identifiant local unique et stable.

## 1.4 Traçabilité obligatoire

Aucune transmission ne doit être silencieuse. Chaque tentative doit être journalisée.

## 1.5 Idempotence obligatoire

Une même soumission ne doit pas créer plusieurs objets dans le SaaS si elle est renvoyée plusieurs fois.

---

# 2. Événements métier à transmettre

Le site marketing doit pouvoir émettre au minimum les événements suivants :

## 2.1 contact_submitted
Cas : formulaire de contact général

## 2.2 quote_requested
Cas : demande de devis

## 2.3 website_brief_submitted
Cas : brief site web

## 2.4 webapp_brief_submitted
Cas : brief application web

## 2.5 domain_hosting_request_submitted
Cas : demande domaine / hébergement

## 2.6 audit_request_submitted
Cas : demande d’audit / rendez-vous

## 2.7 service_order_created
Cas : commande ou précommande de service

---

# 3. Objets métier cibles côté SaaS

Selon l’événement, le SaaS devra plus tard pouvoir créer ou mettre à jour :

- Lead
- Contact
- Company / Organization
- Quote Request
- Brief Request
- Draft Order
- Opportunity / Pre-Project
- Appointment Request

---

# 4. Stratégie de mapping recommandée

## 4.1 contact_submitted
Crée ou met à jour :
- Lead
- Contact
- Company si entreprise renseignée

## 4.2 quote_requested
Crée ou met à jour :
- Lead
- Contact
- Company
- Quote Request
- Opportunity

## 4.3 website_brief_submitted
Crée ou met à jour :
- Lead
- Contact
- Company
- Brief Request
- Opportunity / Pre-Project

## 4.4 webapp_brief_submitted
Crée ou met à jour :
- Lead
- Contact
- Company
- Brief Request
- Opportunity / Pre-Project

## 4.5 domain_hosting_request_submitted
Crée ou met à jour :
- Lead
- Contact
- Company
- Service Request

## 4.6 audit_request_submitted
Crée ou met à jour :
- Lead
- Contact
- Company
- Appointment Request

## 4.7 service_order_created
Crée ou met à jour :
- Lead ou Client selon contexte
- Contact
- Company
- Draft Order
- Opportunity ou Project Seed selon logique future

---

# 5. Structure minimale d’un enregistrement local côté marketing

Chaque soumission stockée localement doit contenir au minimum :

- local_id
- event_type
- form_type
- source_page
- source_url
- submitted_at
- payload_normalized
- consent_flags
- integration_status
- retry_count
- last_attempt_at
- last_error_message
- external_system
- external_reference_id
- external_reference_type

---

# 6. Payload normalisé recommandé

Chaque événement envoyé vers le SaaS doit utiliser une structure stable.

## Structure recommandée

```json
{
  "event_name": "quote_requested",
  "event_version": "1.0",
  "occurred_at": "ISO8601_DATETIME",
  "source_system": "marketing_site",
  "source_instance": "agadir-concept.com",
  "idempotency_key": "unique-stable-key",
  "local_reference": {
    "entity_type": "submission",
    "entity_id": "local_submission_id"
  },
  "person": {
    "first_name": "",
    "last_name": "",
    "full_name": "",
    "email": "",
    "phone": ""
  },
  "company": {
    "name": "",
    "website": "",
    "industry": ""
  },
  "request": {
    "service_type": "",
    "project_type": "",
    "budget_range": "",
    "deadline_preference": "",
    "description": "",
    "extra_data": {}
  },
  "meta": {
    "page_title": "",
    "page_url": "",
    "referrer": "",
    "language": "fr",
    "utm": {
      "source": "",
      "medium": "",
      "campaign": "",
      "term": "",
      "content": ""
    }
  },
  "consent": {
    "privacy_policy_accepted": true,
    "marketing_opt_in": false
  }
}
```

---

# 7. Champs minimums communs recommandés

## 7.1 Personne
- first_name
- last_name
- full_name
- email
- phone

## 7.2 Entreprise
- company_name
- company_website
- company_industry

## 7.3 Demande
- service_type
- request_type
- description
- budget_range
- timeline

## 7.4 Métadonnées
- source_url
- page_title
- referrer
- language
- utm_source
- utm_medium
- utm_campaign
- utm_term
- utm_content

## 7.5 Consentement
- privacy_policy_accepted
- marketing_opt_in

---

# 8. Champs spécifiques par formulaire

## 8.1 Contact général
- service_interest
- message

## 8.2 Demande de devis
- project_type
- budget_range
- deadline_preference
- maintenance_needed
- hosting_needed

## 8.3 Brief site web
- website_type
- business_activity
- goals
- estimated_pages
- languages_needed
- inspirations
- requested_features
- content_ready
- budget_range
- timeline

## 8.4 Brief application web
- app_type
- target_users
- required_features
- integration_needs
- reporting_needed
- notifications_needed
- client_portal_needed
- budget_range
- timeline

## 8.5 Domaine / hébergement
- domain_action_type
- requested_domain
- hosting_plan_interest
- professional_email_needed

## 8.6 Audit / rendez-vous
- audit_type
- preferred_slot
- preferred_channel

## 8.7 Commande service
- ordered_service
- ordered_plan
- quantity
- project_notes
- preferred_start_date

---

# 9. Endpoints logiques à prévoir

Les URLs réelles pourront évoluer, mais la logique suivante doit être anticipée.

## 9.1 Réception d’événement
POST /api/integrations/marketing/events

Rôle :
recevoir un événement métier du site marketing.

## 9.2 Relance / retraitement
POST /api/integrations/marketing/events/replay

Rôle :
relancer un envoi échoué ou demander un retraitement.

## 9.3 Vérification par référence locale
GET /api/integrations/marketing/events/{local_reference}

Rôle :
vérifier si un événement a déjà été reçu et à quel état.

## 9.4 Health check
GET /api/integrations/marketing/health

Rôle :
vérifier la disponibilité technique de l’intégration.

---

# 10. Réponses attendues du SaaS

## 10.1 Réponse succès minimale recommandée

```json
{
  "success": true,
  "status": "accepted",
  "event_name": "quote_requested",
  "local_reference": "submission_123",
  "external_reference": {
    "entity_type": "lead",
    "entity_id": "lead_456"
  },
  "message": "Event accepted and queued"
}
```

## 10.2 Réponse erreur minimale recommandée

```json
{
  "success": false,
  "status": "rejected",
  "error_code": "INVALID_PAYLOAD",
  "message": "Missing required field: email"
}
```

---

# 11. Statuts d’intégration à gérer côté site marketing

Le site marketing doit gérer au minimum les statuts suivants :

- pending
- queued
- sent
- accepted
- synced
- failed
- retry_required
- rejected

---

# 12. Journal d’intégration

Un journal d’intégration doit être consultable côté administration pour chaque soumission.

## Informations minimums à afficher
- identifiant local
- type d’événement
- formulaire d’origine
- date de soumission
- statut d’intégration
- nombre de tentatives
- dernière tentative
- message d’erreur si échec
- référence externe si disponible
- action de relance manuelle si autorisée

---

# 13. Idempotency key

Chaque transmission doit embarquer une clé d’idempotence stable.

## Recommandation
Construire une clé à partir d’un identifiant local unique non réutilisable.

Exemple :
- marketing_submission_{uuid}

Cette clé doit être réutilisée lors des relances de la même soumission.

---

# 14. Politique de retry

## Recommandation
- 1re tentative : immédiate ou quasi immédiate
- 2e tentative : différée
- 3e tentative : différée
- au-delà : passage en retry_required

Le détail pourra être ajusté plus tard, mais la structure doit le permettre.

---

# 15. Sécurité de l’intégration

## Exigences minimales
- HTTPS obligatoire
- authentification par clé API ou token d’intégration
- rotation possible des secrets
- validation stricte des payloads
- logs des erreurs sans exposition excessive de données sensibles
- limitation de débit si nécessaire

---

# 16. Confidentialité des données

Le contrat doit respecter une logique de minimisation :
- ne transmettre que les données utiles
- ne pas surcollecter
- journaliser de manière proportionnée
- respecter le consentement collecté sur les formulaires

---

# 17. Comportement en cas d’indisponibilité du SaaS

Si le SaaS est indisponible :
- la soumission est quand même enregistrée localement
- l’utilisateur final reçoit un succès métier si la soumission locale est valide
- la synchronisation passe en pending ou failed selon la stratégie retenue
- l’admin peut consulter l’échec
- une relance est possible plus tard

---

# 18. Préparation du futur portail client

Le contrat marketing → SaaS doit aussi anticiper qu’une commande ou un brief validé pourra plus tard servir à :
- créer un client
- créer un projet
- générer un accès portail
- ouvrir un onboarding

Le site marketing ne doit pas implémenter cela maintenant, mais les structures doivent éviter de bloquer cette évolution.

---

# 19. Gouvernance de la vérité métier

Le site marketing est la source d’entrée commerciale.

Le SaaS devient la source de vérité métier une fois l’objet synchronisé et pris en charge.

Cela signifie :
- avant synchronisation, la vérité est côté marketing pour la soumission initiale
- après synchronisation, la vérité métier bascule côté SaaS
