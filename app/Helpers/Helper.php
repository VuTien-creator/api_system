<?php

/**
 * List all models
 */
if(!function_exists('listModels')) {
    function listModels()
    {
        $path = app_path('Models') . '/*.php';
        $models = collect(glob($path))->map(fn ($file) => basename($file, '.php'))->toArray();

        // Exclude all system models
        $systemModels = [
            'BaseModel',
        ];
        return array_diff($models, $systemModels);
    }
}
