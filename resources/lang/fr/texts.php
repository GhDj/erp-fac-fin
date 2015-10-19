<?php

return array(

  // client
  'organization' => 'Entreprise',
  'name' => 'Nom',
  'website' => 'Site web',
  'work_phone' => 'Téléphone',
  'address' => 'Adresse',
  'address1' => 'Rue',
  'address2' => 'Appt/Bâtiment',
  'city' => 'Ville',
  'state' => 'Région/Département',
  'postal_code' => 'Code postal',
  'country_id' => 'Pays',
  'contacts' => 'Informations de contact',
  'first_name' => 'Prénom',
  'last_name' => 'Nom',
  'phone' => 'Téléphone',
  'email' => 'Courriel',
  'additional_info' => 'Informations complémentaires',
  'payment_terms' => 'Conditions de paiement',
  'currency_id' => 'Devise',
  'size_id' => 'Taille',
  'industry_id' => 'Secteur',
  'private_notes' => 'Note personnelle',

  // invoice
  'invoice' => 'Facture',
  'client' => 'Client',
  'invoice_date' => 'Date de la facture',
  'due_date' => 'Date d\'échéance',
  'invoice_number' => 'Numéro de facture',
  'invoice_number_short' => 'Facture #',
  'po_number' => 'Numéro du bon de commande',
  'po_number_short' => 'Bon de commande #',
  'frequency_id' => 'Fréquence',
  'discount' => 'Remise',
  'taxes' => 'Taxes',
  'tax' => 'Taxe',
  'item' => 'Article',
  'description' => 'Description',
  'unit_cost' => 'Coût unitaire',
  'quantity' => 'Quantité',
  'line_total' => 'Total',
  'subtotal' => 'Total',
  'paid_to_date' => 'Versé à ce jour',
  'balance_due' => 'Montant total',
  'invoice_design_id' => 'Design',
  'terms' => 'Conditions',
  'your_invoice' => 'Votre facture',

  'remove_contact' => 'Supprimer un contact',
  'add_contact' => 'Ajouter un contact',
  'create_new_client' => 'Ajouter un nouveau client',
  'edit_client_details' => 'Modifier les informations du client',
  'enable' => 'Autoriser',
  'learn_more' => 'En savoir +',
  'manage_rates' => 'Gérer les taux',
  'note_to_client' => 'Commentaire pour le client',
  'invoice_terms' => 'Conditions de facturation',
  'save_as_default_terms' => 'Sauvegarder comme conditions par défaut',
  'download_pdf' => 'Télécharger le PDF',
  'pay_now' => 'Payer maintenant',
  'save_invoice' => 'Sauvegarder la facture',
  'clone_invoice' => 'Dupliquer la facture',
  'archive_invoice' => 'Archiver la facture',
  'delete_invoice' => 'Supprimer la facture',
  'email_invoice' => 'Envoyer la facture par courriel',
  'enter_payment' => 'Saisissez un paiement',
  'tax_rates' => 'Taux de taxe',
  'rate' => 'Taux',
  'settings' => 'Paramètres',
  'enable_invoice_tax' => 'Spécifier une <br>taxe pour la facture</b>',
  'enable_line_item_tax' => 'Spécifier une <b>taxe pour chaque ligne</b>',

  // navigation
  'dashboard' => 'Tableau de bord',
  'clients' => 'Clients',
  'invoices' => 'Factures',
  'payments' => 'Paiements',
  'credits' => 'Crédits',
  'history' => 'Historique',
  'search' => 'Rechercher',
  'sign_up' => 'S\'enregistrer',
  'guest' => 'Invité',
  'company_details' => 'Informations sur l\'entreprise',
  'online_payments' => 'Paiements en ligne',
  'notifications' => 'Notifications',
  'import_export' => 'Importer/Exporter',
  'done' => 'Valider',
  'save' => 'Sauvegarder',
  'create' => 'Créer',
  'upload' => 'Envoyer',
  'import' => 'Importer',
  'download' => 'Télécharger',
  'cancel' => 'Annuler',
  'close' => 'Fermer',
  'provide_email' => 'Veuillez renseigner une adresse courriel valide',
  'powered_by' => 'Propulsé par',
  'no_items' => 'Aucun élément',

  // recurring invoices
  'recurring_invoices' => 'Factures récurrentes',
  'recurring_help' => '<p>Envoyer automatiquement la même facture à vos clients de façon hebdomadaire, bimensuelle, mensuelle, trimestrielle ou annuelle.</p>
        <p>Utiliser :MONTH, :QUARTER ou :YEAR pour des dates dynamiques. Les opérations simples fonctionnent également, par exemple :MONTH-1.</p>
        <p>Exemples de variables dynamiques pour les factures:</p>
        <ul>
          <li>"Adhésion au club de gym pour le mois de :MONTH" => "Adhésion au club de gym pour le mois de Juillet"</li>
          <li>":YEAR+1 - abonnement annuel" => "2015 - abonnement annuel"</li>
          <li>"Acompte pour le :QUARTER+1" => "Acompte pour le Q2"</li>
        </ul>',

  // dashboard
  'in_total_revenue' => 'de bénéfice total',
  'billed_client' => 'client facturé',
  'billed_clients' => 'clients facturés',
  'active_client' => 'client actif',
  'active_clients' => 'clients actifs',
  'invoices_past_due' => 'Date limite de paiement dépassée',
  'upcoming_invoices' => 'Factures à venir',
  'average_invoice' => 'Moyenne de facturation',

  // list pages
  'archive' => 'Archiver',
  'delete' => 'Supprimer',
  'archive_client' => 'Archiver ce client',
  'delete_client' => 'Supprimer ce client',
  'archive_payment' => 'Archiver ce paiement',
  'delete_payment' => 'Supprimer ce paiement',
  'archive_credit' => 'Archiver ce crédit',
  'delete_credit' => 'Supprimer ce crédit',
  'show_archived_deleted' => 'Afficher archivés/supprimés',
  'filter' => 'Filtrer',
  'new_client' => 'Nouveau client',
  'new_invoice' => 'Nouvelle facture',
  'new_payment' => 'Nouveau paiement',
  'new_credit' => 'Nouveau crédit',
  'contact' => 'Contact',
  'date_created' => 'Date de création',
  'last_login' => 'Dernière connexion',
  'balance' => 'Solde',
  'action' => 'Action',
  'status' => 'Statut',
  'invoice_total' => 'Montant total',
  'frequency' => 'Fréquence',
  'start_date' => 'Date de début',
  'end_date' => 'Date de fin',
  'transaction_reference' => 'Référence de la transaction',
  'method' => 'Méthode',
  'payment_amount' => 'Montant du paiement',
  'payment_date' => 'Date du paiement',
  'credit_amount' => 'Montant du crédit',
  'credit_balance' => 'Solde du crédit',
  'credit_date' => 'Date de crédit',
  'empty_table' => 'Aucune donnée disponible dans la table',
  'select' => 'Sélectionner',
  'edit_client' => 'Éditer le client',
  'edit_invoice' => 'Éditer la facture',

  // client view page
  'create_invoice' => 'Créer une facture',
  'enter_credit' => 'Saisissez un crédit',
  'last_logged_in' => 'Dernière connexion',
  'details' => 'Détails',
  'standing' => 'En attente',
  'credit' => 'Crédit',
  'activity' => 'Activité',
  'date' => 'Date',
  'message' => 'Message',
  'adjustment' => 'Réglements',
  'are_you_sure' => 'Voulez-vous vraiment effectuer cette action ?',

  // payment pages
  'payment_type_id' => 'Type de paiement',
  'amount' => 'Montant',

  // account/company pages
  'work_email' => 'Courriel',
  'language_id' => 'Langage',
  'timezone_id' => 'Fuseau horaire',
  'date_format_id' => 'Format de la date',
  'datetime_format_id' => 'Format Date/Heure',
  'users' => 'Utilisateurs',
  'localization' => 'Localisation',
  'remove_logo' => 'Supprimer le logo',
  'logo_help' => 'Formats supportés: JPEG, GIF et PNG. Hauteur recommandé: 120px',
  'payment_gateway' => 'Passerelle de paiement',
  'gateway_id' => 'Fournisseur',
  'email_notifications' => 'Notifications par courriel',
  'email_sent' => 'm\'envoyer un courriel quand une facture est <b>envoyée</b>',
  'email_viewed' => 'm\'envoyer un courriel quand une facture est <b>vue</b>',
  'email_paid' => 'm\'envoyer un courriel quand une facture est <b>payée</b>',
  'site_updates' => 'Mises à jour du site',
  'custom_messages' => 'Messages personnalisés',
  'default_invoice_terms' => 'Définir comme les conditions par défaut',
  'default_email_footer' => 'Définir comme la signature de courriel par défaut',
  'import_clients' => 'Importer des données clients',
  'csv_file' => 'Sélectionner un fichier CSV',
  'export_clients' => 'Exporter des données clients',
  'select_file' => 'Veuillez sélectionner un fichier',
  'first_row_headers' => 'Utiliser la première ligne comme en-tête',
  'column' => 'Colonne',
  'sample' => 'Exemple',
  'import_to' => 'Importer en tant que',
  'client_will_create' => 'client sera créé',
  'clients_will_create' => 'clients seront créés',
  'email_settings' => 'Paramètres mail',
  'pdf_email_attachment' => 'Joindre PDF aux emails',

  // application messages
  'created_client' => 'Client créé avec succès',
  'created_clients' => ':count clients créés avec succès',
  'updated_settings' => 'Paramètres mis à jour avec succès',
  'removed_logo' => 'Logo supprimé avec succès',
  'sent_message' => 'Message envoyé avec succès',
  'invoice_error' => 'Veuillez vous assurer de sélectionner un client et de corriger les erreurs',
  'limit_clients' => 'Désolé, cela dépasse la limite de :count clients',
  'payment_error' => 'Il y a eu une erreur lors du traitement de votre paiement. Veuillez réessayer ultérieurement',
  'registration_required' => 'Veuillez vous enregistrer pour envoyer une facture par courriel',
  'confirmation_required' => 'Veuillez confirmer votre adresse courriel',

  'updated_client' => 'Client modifié avec succès',
  'created_client' => 'Client créé avec succès',
  'archived_client' => 'Client archivé avec succès',
  'archived_clients' => ':count clients archivés avec succès',
  'deleted_client' => 'Client supprimé avec succès',
  'deleted_clients' => ':count clients supprimés avec succès',

  'updated_invoice' => 'Facture modifiée avec succès',
  'created_invoice' => 'Facture créée avec succès',
  'cloned_invoice' => 'Facture dupliquée avec succès',
  'emailed_invoice' => 'Facture envoyée par courriel avec succès',
  'and_created_client' => 'et client créé',
  'archived_invoice' => 'Facture archivée avec succès',
  'archived_invoices' => ':count factures archivées avec succès',
  'deleted_invoice' => 'Facture supprimée avec succès',
  'deleted_invoices' => ':count factures supprimées avec succès',

  'created_payment' => 'Paiement créé avec succès',
  'archived_payment' => 'Paiement archivé avec succès',
  'archived_payments' => ':count paiement archivés avec succès',
  'deleted_payment' => 'Paiement supprimé avec succès',
  'deleted_payments' => ':count paiement supprimés avec succès',
  'applied_payment' => 'Paiement appliqué avec succès',

  'created_credit' => 'Crédit créé avec succès',
  'archived_credit' => 'Crédit archivé avec succès',
  'archived_credits' => ':count crédits archivés avec succès',
  'deleted_credit' => 'Crédit supprimé avec succès',
  'deleted_credits' => ':count crédits supprimés avec succès',

    // Emails
  'confirmation_subject' => 'Validation du compte Invoice Ninja',
  'confirmation_header' => 'Validation du compte',
  'confirmation_message' => 'Veuillez cliquer sur le lien ci-après pour valider votre compte.',
  'invoice_subject' => 'Nouvelle facture :invoice en provenance de :account',
  'invoice_message' => 'Pour voir votre facture de :amount, Cliquez sur le lien ci-après.',
  'payment_subject' => 'Paiement reçu',
  'payment_message' => 'Merci pour votre paiement d\'un montant de :amount',
  'email_salutation' => 'Cher :name,',
  'email_signature' => 'Cordialement,',
  'email_from' => 'L\'équipe Invoice Ninja',
  'user_email_footer' => 'Pour modifier vos paramètres de notification par courriel, veuillez visiter '.SITE_URL.'/company/notifications',
  'invoice_link_message' => 'Pour voir la facture de votre client cliquez sur le lien ci-après :',
  'notification_invoice_paid_subject' => 'La facture :invoice a été payée par le client :client',
  'notification_invoice_sent_subject' => 'La facture :invoice a été envoyée au client :client',
  'notification_invoice_viewed_subject' => 'La facture :invoice a été vue par le client :client',
  'notification_invoice_paid' => 'Un paiement de :amount a été effectué par le client :client concernant la facture :invoice.',
  'notification_invoice_sent' => 'Le client suivant :client a reçu par courriel la facture :invoice d\'un montant de :amount',
  'notification_invoice_viewed' => 'Le client suivant :client a vu la facture :invoice d\'un montant de :amount',
  'reset_password' => 'Vous pouvez réinitialiser votre mot de passe en cliquant sur le lien suivant :',
  'reset_password_footer' => 'Si vous n\'avez pas effectué de demande de réinitalisation de mot de passe veuillez contacter notre support :' . CONTACT_EMAIL,

  // Payment page
  'secure_payment' => 'Paiement sécurisé',
  'card_number' => 'Numéro de carte',
  'expiration_month' => 'Mois d\'expiration',
  'expiration_year' => 'Année d\'expiration',
  'cvv' => 'CVV',

  // Security alerts
  'security' => array(
    'too_many_attempts' => 'Trop de tentatives. Essayez à nouveau dans quelques minutes.',
    'wrong_credentials' => 'Courriel ou mot de passe incorrect',
    'confirmation' => 'Votre compte a été validé !',
    'wrong_confirmation' => 'Code de confirmation incorrect.',
    'password_forgot' => 'Les informations de réinitialisation de votre mot de passe vous ont été envoyées par courriel.',
    'password_reset' => 'Votre mot de passe a été modifié avec succès.',
    'wrong_password_reset' => 'Mot de passe incorrect. Veuillez réessayer',
  ),

  // Pro Plan
  'pro_plan' => [
    'remove_logo' => ':link pour supprimer le logo Invoice Ninja en souscrivant au Plan Pro',
    'remove_logo_link' => 'Cliquez ici',
  ],

  'logout' => 'Se déconnecter',
  'sign_up_to_save' => 'Connectez vous pour sauvegarder votre travail',
  'agree_to_terms' =>'J\'accepte les conditions d\'utilisation d\'Invoice ninja :terms',
  'terms_of_service' => 'Conditions d\'utilisation',
  'email_taken' => 'L\'adresse courriel existe déjà',
  'working' => 'En cours',
  'success' => 'Succès',
  'success_message' => 'Inscription réussie avec succès. Veuillez cliquer sur le lien dans le courriel de confirmation de compte pour vérifier votre adresse courriel.',
  'erase_data' => 'Cela supprimera vos données de façon permanente.',
  'password' => 'Mot de passe',

  'pro_plan_product' => 'Plan Pro',
  'pro_plan_description' => 'Inscription d\'une durée d\'un an au Plan Pro d\'Invoice ninja',
  'pro_plan_success' => 'Merci pour votre inscription ! Une fois la facture réglée, votre adhésion au Plan Pro commencera.',

  'unsaved_changes' => 'Vous avez des modifications non enregistrées',
  'custom_fields' => 'Champs personnalisés',
  'company_fields' => 'Champs de société',
  'client_fields' => 'Champs client',
  'field_label' => 'Nom du champ',
  'field_value' => 'Valeur du champ',
  'edit' => 'Éditer',
  'view_as_recipient' => 'Voir en tant que destinataire',

  // product management
  'product_library' => 'Inventaire',
  'product' => 'Produit',
  'products' => 'Produits',
  'fill_products' => 'Remplissage auto des produits',
  'fill_products_help' => 'La sélection d\'un produit entrainera la MAJ de <b>la description et du prix</b>',
  'update_products' => 'Mise à jour auto des produits',
  'update_products_help' => 'La mise à jour d\'une facture entraîne la <b>mise à jour des produits</b>',
  'create_product' => 'Nouveau produit',
  'edit_product' => 'Éditer produit',
  'archive_product' => 'Archiver Produit',
  'updated_product' => 'Produit mis à jour',
  'created_product' => 'Produit créé',
  'archived_product' => 'Produit archivé',
  'pro_plan_custom_fields' => ':link pour activer les champs personnalisés en rejoingant le Plan Pro',

  'advanced_settings' => 'Paramètres avancés',
  'pro_plan_advanced_settings' => ':link pour activer les paramètres avancés en rejoingant le Plan Pro',
  'invoice_design' => 'Modèle de facture',
  'specify_colors' => 'Spécifiez les couleurs',
  'specify_colors_label' => 'Sélectionnez les couleurs utilisés dans les factures',

  'chart_builder' => 'Concepteur de graphiques',
  'ninja_email_footer' => 'Utilisez :site pour facturer vos clients et être payés en ligne gratuitement!',
  'go_pro' => 'Passez au Plan Pro',

  // Quotes
  'quote' => 'Devis',
  'quotes' => 'Devis',
  'quote_number' => 'Devis numéro',
  'quote_number_short' => 'Devis #',
  'quote_date' => 'Date du devis',
  'quote_total' => 'Montant du devis',
  'your_quote' => 'Votre devis',
  'total' => 'Total',
  'clone' => 'Dupliquer',

  'new_quote' => 'Nouveau devis',
  'create_quote' => 'Créer un devis',
  'edit_quote' => 'Éditer le devis',
  'archive_quote' => 'Archiver le devis',
  'delete_quote' => 'Supprimer le devis',
  'save_quote' => 'Enregistrer le devis',
  'email_quote' => 'Envoyer le devis par courriel',
  'clone_quote' => 'Dupliquer le devis',
  'convert_to_invoice' => 'Convertir en facture',
  'view_invoice' => 'Nouvelle facture',
  'view_quote' => 'Voir le devis',
  'view_client' => 'Voir le client',

  'updated_quote' => 'Devis mis à jour',
  'created_quote' => 'Devis créé',
  'cloned_quote' => 'Devis dupliqué avec succès',
  'emailed_quote' => 'Devis envoyé par courriel',
  'archived_quote' => 'Devis archivé',
  'archived_quotes' => ':count devis ont bien été archivés',
  'deleted_quote' => 'Devis supprimé',
  'deleted_quotes' => ':count devis ont bien été supprimés',
  'converted_to_invoice' => 'Le devis a bien été converti en facture',

  'quote_subject' => 'Nouveau devis de :account',
  'quote_message' => 'Pour visionner votre devis de :amount, cliquez sur le lien ci-dessous.',
  'quote_link_message' => 'Pour visionner votre soumission, cliquez sur le lien ci-dessous:',
  'notification_quote_sent_subject' => 'Le devis :invoice a été envoyé à :client',
  'notification_quote_viewed_subject' => 'Le devis :invoice a été visionné par :client',
  'notification_quote_sent' => 'Le devis :invoice de :amount a été envoyé au client :client.',
  'notification_quote_viewed' => 'Le devis :invoice de :amount a été visioné par le client :client.',

  'session_expired' => 'Votre session a expiré.',

  'invoice_fields' => 'Champs de facture',
  'invoice_options' => 'Options de facturation',
  'hide_quantity' => 'Masquer la quantité',
  'hide_quantity_help' => 'Si la quantité de vos produits sont toujours 1, vous pouvez alors masquer la colonne "Quantité".',
  'hide_paid_to_date' => 'Masquer "Payé à ce jour"',
  'hide_paid_to_date_help' => 'Afficher seulement la ligne "Payé à ce jour"sur les factures pour lesquelles il y a au moins un paiement.',

  'charge_taxes' => 'Taxe supplémentaire',
  'user_management' => 'Gestion des utilisateurs',
  'add_user' => 'Ajouter utilisateur',
  'send_invite' => 'Envoyer invitation',
  'sent_invite' => 'Invitation envoyés',
  'updated_user' => 'Utilisateur mis à jour',
  'invitation_message' => 'Vous avez été invité par :invitor. ',
  'register_to_add_user' => 'Veuillez vous enregistrer pour ajouter un utilisateur',
  'user_state' => 'État',
  'edit_user' => 'Éditer l\'utilisateur',
  'delete_user' => 'Supprimer l\'utilisateur',
  'active' => 'Actif',
  'pending' => 'En attente',
  'deleted_user' => 'Utilisateur supprimé',
  'limit_users' => 'Désolé, ceci excédera la limite de ' . MAX_NUM_USERS . ' utilisateurs',

  'confirm_email_invoice' => 'Voulez-vous vraiment envoyer cette facture par courriel ?',
  'confirm_email_quote' => 'Voulez-vous vraiment envoyer ce devis par courriel ?',
  'confirm_recurring_email_invoice' => 'Les factures récurrentes sont activées, voulez-vous vraiment envoyer cette facture par courriel ?',

  'cancel_account' => 'Supprimer le compte',
  'cancel_account_message' => 'Attention: Ceci supprimera de façon permanente toutes vos données; cette action est irréversible.',
  'go_back' => 'Retour',

  'data_visualizations' => 'Visualisation des données',
  'sample_data' => 'Données fictives présentées',
  'hide' => 'Cacher',
  'new_version_available' => 'Une nouvelle version de :releases_link est disponible. Vous utilisez v:user_version, la plus récente est v:latest_version',


  'invoice_settings' => 'Paramètres des factures',
  'invoice_number_prefix' => 'Préfixe du numéro de facture',
  'invoice_number_counter' => 'Compteur du numéro de facture',
  'quote_number_prefix' => 'Préfixe du numéro de devis',
  'quote_number_counter' => 'Compteur du numéro de devis',
  'share_invoice_counter' => 'Partager le compteur de facture',
  'invoice_issued_to' => 'Facture destinée à',
  'invalid_counter' => 'Pour éviter un éventuel conflit, merci de définir un préfixe pour le numéro de facture ou pour le numéro de devis',
  'mark_sent' => 'Marquer comme envoyé',

  'gateway_help_1' => ':link to sign up for Authorize.net.',
  'gateway_help_2' => ':link to sign up for Authorize.net.',
  'gateway_help_17' => ':link to get your PayPal API signature.',
  'gateway_help_23' => 'Note: use your secret API key, not your publishable API key.',
  'gateway_help_27' => ':link to sign up for TwoCheckout.',

  'more_designs' => 'Plus de modèles',
  'more_designs_title' => 'Modèles de factures additionnels',
  'more_designs_cloud_header' => 'Passez au Plan Pro pour plus de modèles',
  'more_designs_cloud_text' => '',
  'more_designs_self_host_header' => 'Obtenez 6 modèles de factures additionnels pour seulement '.INVOICE_DESIGNS_PRICE.'$',
  'more_designs_self_host_text' => '',
  'buy' => 'Acheter',
  'bought_designs' => 'Les nouveaux modèles ont été ajoutés avec succès',

  'sent' => 'envoyé',
  'timesheets' => 'Feuilles de temps',

  'payment_title' => 'Entrez votre adresse de facturation et vos informations bancaires',
  'payment_cvv' => '*Numéro à 3 ou 4 chiffres au dos de votre carte',
  'payment_footer1' => '*L\'adresse de facturation doit correspondre à celle enregistrée avec votre carte bancaire',
  'payment_footer2' => '*Merci de cliquer sur "Payer maintenant" une seule fois. Le processus peut prendre jusqu\'à 1 minute.',
  'vat_number' => 'Numéro de TVA',

  'id_number' => 'Numéro ID',
  'white_label_link' => 'Marque blanche',
  'white_label_text' => 'Pour retirer la marque Invoice Ninja en haut de la page client, achetez un licence en marque blanche de '.WHITE_LABEL_PRICE.'$.',
  'white_label_header' => 'White Label',
  'bought_white_label' => 'Successfully enabled white label license',
  'white_labeled' => 'White labeled',

  'restore' => 'Restaurer',
  'restore_invoice' => 'Restaurer la facture',
  'restore_quote' => 'Restaurer le devis',
  'restore_client' => 'Restaurer le client',
  'restore_credit' => 'Restaurer le crédit',
  'restore_payment' => 'Restaurer le paiement',

  'restored_invoice' => 'Facture restaurée avec succès',
  'restored_quote' => 'Devis restauré avec succès',
  'restored_client' => 'Client restauré avec succès',
  'restored_payment' => 'Paiement restauré avec succès',
  'restored_credit' => 'Crédit restauré avec succès',

  'reason_for_canceling' => 'Aidez nous à améliorer notre site en nous disant pourquoi vous partez.',
  'discount_percent' => 'Pourcent',
  'discount_amount' => 'Montant',

  'invoice_history' => 'Historique des factures',
  'quote_history' => 'Historique des devis',
  'current_version' => 'Version courante',
  'select_versiony' => 'Choix de la verison',
  'view_history' => 'Consulter l\'historique',

  'edit_payment' => 'Editer le paiement',
  'updated_payment' => 'Paiement édité avec succès',
  'deleted' => 'Supprimé',
  'restore_user' => 'Restaurer l\'utilisateur',
  'restored_user' => 'Restaurer la commande',
  'show_deleted_users' => 'Voir les utilisateurs supprimés',
  'email_templates' => 'Templates de mail',
  'invoice_email' => 'Templates de facture',
  'payment_email' => 'Email de paiement',
  'quote_email' => 'Email de déclaration',
  'reset_all' => 'Réinitialiser',
  'approve' => 'Accepter',

  'token_billing_type_id' => 'Token Billing',
  'token_billing_help' => 'Enables you to store credit cards with your gateway, and charge them at a later date.',
  'token_billing_1' => 'Disabled',
  'token_billing_2' => 'Opt-in - checkbox is shown but not selected',
  'token_billing_3' => 'Opt-out - checkbox is shown and selected',
  'token_billing_4' => 'Always',
  'token_billing_checkbox' => 'Store credit card details',
  'view_in_stripe' => 'View in Stripe',
  'use_card_on_file' => 'Use card on file',
  'edit_payment_details' => 'Edit payment details',
  'token_billing' => 'Save card details',
  'token_billing_secure' => 'The data is stored securely by :stripe_link',

  'support' => 'Support',
  'contact_information' => 'Information de contact',
  '256_encryption' => '256-Bit Encryption',
  'amount_due' => 'Montant dû',
  'billing_address' => 'Billing address',
  'billing_method' => 'Billing method',
  'order_overview' => 'Order overview',
  'match_address' => '*Address must match address associated with credit card.',
  'click_once' => '*Please click "PAY NOW" only once - transaction may take up to 1 minute to process.',

  'default_invoice_footer' => 'Définir par défaut',
  'invoice_footer' => 'Pied de facture',
  'save_as_default_footer' => 'Définir comme pied de facture par défatu',

  'token_management' => 'Token Management',
  'tokens' => 'Tokens',
  'add_token' => 'Add Token',
  'show_deleted_tokens' => 'Show deleted tokens',
  'deleted_token' => 'Successfully deleted token',
  'created_token' => 'Successfully created token',
  'updated_token' => 'Successfully updated token',
  'edit_token' => 'Edit Token',
  'delete_token' => 'Delete Token',
  'token' => 'Token',

  'add_gateway' => 'Ajouter passerelle',
  'delete_gateway' => 'Supprimer passerelle',
  'edit_gateway' => 'Editer passerelle',
  'updated_gateway' => 'Passerelle mise à jour avec succès',
  'created_gateway' => 'Passerelle crée avec succès',
  'deleted_gateway' => 'Passerelle supprimée avec succès',
  'pay_with_paypal' => 'PayPal',
  'pay_with_card' => 'Carte bancaire',

  'change_password' => 'Changer de pot de passe',
  'current_password' => 'Mot de passe actuel',
  'new_password' => 'Nouveau mot de passe',
  'confirm_password' => 'Confirmer le mot de passe',
  'password_error_incorrect' => 'Le mot de passe actuel est incorrect.',
  'password_error_invalid' => 'Le nouveau mot de passe est invalide',
  'updated_password' => 'Mot de passe mis à jour avec succès',

  'api_tokens' => 'API Tokens',
  'users_and_tokens' => 'Users & Tokens',
  'account_login' => 'Account Login',
  'recover_password' => 'Recover your password',
  'forgot_password' => 'Mot de passe oublié ?',
  'email_address' => 'Adresse email',
  'lets_go' => 'Allons-y !',
  'password_recovery' => 'Password Recovery',
  'send_email' => 'Send email',
  'set_password' => 'Set Password',
  'converted' => 'Converted',

  'email_approved' => 'Email me when a quote is <b>approved</b>',
  'notification_quote_approved_subject' => 'Quote :invoice was approved by :client',
  'notification_quote_approved' => 'The following client :client approved Quote :invoice for :amount.',
  'resend_confirmation' => 'Resend confirmation email',
  'confirmation_resent' => 'The confirmation email was resent',

  'gateway_help_42' => ':link to sign up for BitPay.<br/>Note: use a Legacy API Key, not an API token.',
  'payment_type_credit_card' => 'Carte de crédit',
  'payment_type_paypal' => 'PayPal',
  'payment_type_bitcoin' => 'Bitcoin',
  'knowledge_base' => 'Base de connaissances',
  'partial' => 'Partiel',
  'partial_remaining' => ':partial de :balance',

  'more_fields' => 'Plus de champs',
  'less_fields' => 'Moins de champs',
  'client_name' => 'Nom du client',
  'pdf_settings' => 'Réglages PDF',
  'product_settings' => 'Réglages du produit',
  'auto_wrap' => 'Auto Line Wrap',
  'duplicate_post' => 'Warning: the previous page was submitted twice. The second submission had been ignored.',
  'view_documentation' => 'Voir documentation',
  'app_title' => 'Free Open-Source Online Invoicing',
  'app_description' => 'Invoice Ninja is a free, open-source solution for invoicing and billing customers. With Invoice Ninja, you can easily build and send beautiful invoices from any device that has access to the web. Your clients can print your invoices, download them as pdf files, and even pay you online from within the system.',

  'rows' => 'lignes',
  'www' => 'www',
  'logo' => 'Logo',
  'subdomain' => 'Sous domaine',
  'provide_name_or_email' => 'Merci d\'indiquer un nom ou une adresse email',
  'charts_and_reports' => 'Charts & Reports',
  'chart' => 'Chart',
  'report' => 'Report',
  'group_by' => 'Grouper par',
  'paid' => 'Payé',
  'enable_report' => 'Report',
  'enable_chart' => 'Chart',
  'totals' => 'Totals',
  'run' => 'Run',
  'export' => 'Exporter',
  'documentation' => 'Documentation',
  'zapier' => 'Zapier <sup>Beta</sup>',
  'recurring' => 'Récurrent',
  'last_invoice_sent' => 'Dernière facture envoyée le :date',

  'processed_updates' => 'Mise à jour effectuée avec succès',
  'tasks' => 'Tâches',
  'new_task' => 'Nouvelle tâche',
  'start_time' => 'Début',
  'created_task' => 'Tâche crée avec succès',
  'updated_task' => 'Tâche mise à jour avec succès',
  'edit_task' => 'Editer la tâche',
  'archive_task' => 'Archiver tâche',
  'restore_task' => 'Restaurer tâche',
  'delete_task' => 'Supprimer tâche',
  'stop_task' => 'Arrêter tâche',
  'time' => 'Temps',
  'start' => 'Début',
  'stop' => 'Fin',
  'now' => 'Maintenant',
  'timer' => 'Compteur',
  'manual' => 'Manuel',
  'date_and_time' => 'Date & heure',
  'second' => 'seconde',
  'seconds' => 'secondes',
  'minute' => 'minute',
  'minutes' => 'minutes',
  'hour' => 'heure',
  'hours' => 'heures',
  'task_details' => 'Détails tâche',
  'duration' => 'Durée',
  'end_time' => 'Heure de fin',
  'end' => 'Fin',
  'invoiced' => 'Facturé',
  'logged' => 'Connecté',
  'running' => 'En cours',
  'task_error_multiple_clients' => 'Cette tâche ne peut appartenir à plusieurs clients',
  'task_error_running' => 'Merci d\'arrêter les tâches en cours',
  'task_error_invoiced' => 'Tâches déjà facturées',
  'restored_task' => 'Tâche restaurée avec succès',
  'archived_task' => 'Tâche archivée avec succès',
  'archived_tasks' => ':count tâches archivées avec succès',
  'deleted_task' => 'Tâche supprimée avec succès',
  'deleted_tasks' => ':count tâches supprimées avec succès',
  'create_task' => 'Créer tâche',
  'stopped_task' => 'Tâche stoppée avec succès',
  'invoice_task' => 'Tâche facturation',
  'invoice_labels' => 'Champs facture',
  'prefix' => 'Préfixe',
  'counter' => 'Compteur',

  'payment_type_dwolla' => 'Dwolla',
  'gateway_help_43' => ':link pour vous inscrire à Dwolla.',
  'partial_value' => 'Doit être supérieur à zéro et inférieur au total',
  'more_actions' => 'Plus d\'actions',

  'pro_plan_title' => 'NINJA PRO',
  'pro_plan_call_to_action' => 'Mettre à jour maintenant !',
  'pro_plan_feature1' => 'Créer un nombre illimité de clients',
  'pro_plan_feature2' => 'Accéder à 10 magnifiques designs de factures',
  'pro_plan_feature3' => 'URLs personnalisées - "VotreMarque.InvoiceNinja.com"',
  'pro_plan_feature4' => 'Retirer "Created by Invoice Ninja"',
  'pro_plan_feature5' => 'Accès multi-utilisateur & suivi de l\'activité',
  'pro_plan_feature6' => 'Créer des factures Quotes & Pro-forma',
  'pro_plan_feature7' => 'Personnaliser les champs Titres et Numérotation des factures',
  'pro_plan_feature8' => 'Option pour attacher des PDFs aux courriels pour le client',

  'resume' => 'Reprendre',
  'break_duration' => 'Pause',
  'edit_details' => 'Modifier',
  'work' => 'Travail',
  'timezone_unset' => 'Merci de :link pour définir votre fuseau horaire',
  'click_here' => 'cliquer ici',

  'email_receipt' => 'Envoyer le reçu par courriel au client',
  'created_payment_emailed_client' => 'Paiement crée avec succès et envoyé au client',
  'add_company' => 'Ajouter compte',
  'untitled' => 'Sans titre',
  'new_company' => 'Nouveau compte',
  'associated_accounts' => 'Successfully linked accounts',
  'unlinked_account' => 'Successfully unlinked accounts',
  'login' => 'Connexion',
  'or' => 'ou',

  'email_error' => 'Il y a eu un problème en envoyant le courriel',
  'confirm_recurring_timing' => 'Note : les courriels sont envoyés au début de l\'heure.',
  'old_browser' => 'Merci d\'utiliser un <a href="'.OUTDATE_BROWSER_URL.'" target="_blank">navigateur plus récent</a>',
  'payment_terms_help' => 'Définir la date d\'échéance par défaut de la facture',
  'unlink_account' => 'Dissocier le compte',
  'unlink' => 'Dissocier',
  'show_address' => 'Montrer l\'adresse',
  'show_address_help' => 'Éxiger du client qu\'il fournisse une adresse de facturation',
  'update_address' => 'Mettre à jour l\'adresse',
  'update_address_help' => 'Mettre à jour l\'adresse du client avec les détails fournis',
  'times' => 'Horaires',
  'set_now' => 'Définir maintenant',
  'dark_mode' => 'Mode sombre',
  'dark_mode_help' => 'Montrer du texte blanc sur fond noir',
  'add_to_invoice' => 'Ajouter à la facture :invoice',
  'create_new_invoice' => 'Créer une nouvelle facture',
  'task_errors' => 'Merci de corriger les horaires conflictuels',
  'from' => 'De',
  'to' => 'À',
  'font_size' => 'Taille de police',
  'primary_color' => 'Couleur principale',
  'secondary_color' => 'Couleur secondaire',
  'customize_design' => 'Design personnalisé',

  'content' => 'Contenu',
  'styles' => 'Styles',
  'defaults' => 'Valeurs par défaut',
  'margins' => 'Marges',
  'header' => 'En-tête',
  'footer' => 'Pied de page',
  'custom' => 'Personnalisé',
  'invoice_to' => 'Facture pour',
  'invoice_no' => 'Facture n°',
  'recent_payments' => 'Paiements récents',
  'outstanding' => 'Extraordinaire',
  'manage_companies' => 'Gérer les sociétés',
  'total_revenue' => 'Revenu total',  

  'current_user' => 'Utilisateur actuel',
  'new_recurring_invoice' => 'Nouvelle facture récurrente',
  'recurring_invoice' => 'Facture récurrente',
  'recurring_too_soon' => 'Il est trop tôt pour créer la prochaine facture récurrente',
  'created_by_invoice' => 'Créé par :invoice',
  'primary_user' => 'Utilisateur principal',
  'help' => 'Aide',
  'customize_help' => '<p>Nous utilisons <a href="http://pdfmake.org/" target="_blank">pdfmake</a> pour définir le design des factures. Le <a href="http://pdfmake.org/playground.html" target="_blank">bac à sable<a> de pdfmake est une bonne façon de voir cette bibliothèque en action.</p>
                        <p>Vous pouvez accéder à n\'importe quel champ de facture en ajoutant <code>Value</code> à la fin. Par exemple <code>$invoiceNumberValue</code> affiche le numéro de facture.</p>
                        <p>Pour accéder à une propriété héritée avec la  notation par point. Par exemple pour montrer le nom du client vous pouvez utiliser <code>$client.nameValue</code>.</p>
                        <p>Si vous avez besoin d\'aide pour comprendre quelque chose envoyez une question à notre <a href="https://www.invoiceninja.com/forums/forum/support/" target="_blank">forum de support</a>.</p>'
  


);