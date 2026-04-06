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
