@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'translated' => true,
    'maxlength' => 100,
    'onChange' => 'formatPermalink'
])

@unless(isset($item))
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])
@endunless

@formField('input', [
    'name' => 'slug',
    'label' => 'Permalink',
    'translated' => true,
    'ref' => 'permalink',
    'prefix' => $permalinkPrefix ?? ''
])
