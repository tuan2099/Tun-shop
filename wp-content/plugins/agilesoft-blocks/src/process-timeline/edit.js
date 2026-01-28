import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
    return (
        <div {...useBlockProps()} style={{ padding: 16, border: '1px dashed #f57f17' }}>
            <strong>Process Timeline</strong>
            <div style={{ opacity: 0.8, marginTop: 6 }}>
                Đây là preview trong editor. Frontend render bằng render.php
            </div>
        </div>
    );
}
