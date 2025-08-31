import { registerPlugin } from '@wordpress/plugins';
import { PluginSidebar } from '@wordpress/editor';
import { Button } from '@wordpress/components';

function insertPattern(patternName) {
    const registeredPatterns = wp.data
        .select('core')
        .getBlockPatterns();

    if (!registeredPatterns || !registeredPatterns.length) {
        console.warn('Patterns not loaded yet, retrying...');
        setTimeout(() => insertPattern(patternName), 200); // retry after 200ms
        return;
    }

    const pattern = registeredPatterns.find(p => p.name === patternName);
    if (pattern) {
        const blocks = wp.blocks.parse(pattern.content);
        wp.data.dispatch('core/block-editor').insertBlocks(blocks);
    }
}

const TemplateLibrarySidebar = () => (
    <PluginSidebar
        name="templora-template-library"
        title="Templora Template Library"
        icon="index-card"
    >
        <div style={{ padding: '1em' }}>
            <h3>Insert Templates</h3>
            {[
                { name: 'templora/hero-header', title: 'Hero Header' },
                { name: 'templora/about-page', title: 'About Page' },
            ].map(({ name, title }) => (
                <Button
                    key={name}
                    isSecondary
                    style={{ marginBottom: '0.5em', width: '100%' }}
                    onClick={() => insertPattern(name)}
                >
                    {title}
                </Button>
            ))}
        </div>
    </PluginSidebar>
);

registerPlugin('templora-template-library', { render: TemplateLibrarySidebar });
