<?php extend('layouts/backend_layout') ?>

<?php section('content') ?>

<div id="matomo-analytics-settings-page" class="container backend-page">
    <div id="matomo-analytics-settings">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    <fieldset>
                        <legend class="d-flex justify-content-between align-items-center border-bottom mb-4 py-2">
                            <?= lang('matomo_analytics') ?>

                            <?php if (can('edit', PRIV_SYSTEM_SETTINGS)): ?>
                                <button type="button" id="save-settings" class="btn btn-primary">
                                    <i class="fas fa-check-square me-2"></i>
                                    <?= lang('save') ?>
                                </button>
                            <?php endif ?>
                        </legend>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="google-matomo_analytics_urlanalytics-code">
                                        <?= lang('matomo_analytics_url') ?>
                                    </label>
                                    <input id="matomo-analytics-url" placeholder="//example.org/url/to/matomo/"
                                           data-field="matomo_analytics_url" class="form-control">
                                    <div class="form-text text-muted">
                                        <small>
                                            <?= lang('matomo_analytics_url_hint') ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<?php section('content') ?>

<?php section('scripts') ?>

<script src="<?= asset_url('assets/js/utils/url.js') ?>"></script>
<script src="<?= asset_url('assets/js/http/matomo_analytics_settings_http_client.js') ?>"></script>
<script src="<?= asset_url('assets/js/pages/matomo_analytics_settings.js') ?>"></script>

<?php section('scripts') ?>