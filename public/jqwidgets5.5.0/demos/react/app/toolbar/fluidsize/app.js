import React from 'react';
import ReactDOM from 'react-dom';

import JqxToolBar from '../../../jqwidgets-react/react_jqxtoolbar.js';

class App extends React.Component {
    render () {
        let tools = 'toggleButton toggleButton toggleButton | toggleButton | dropdownlist combobox | input';
        let theme = ''
        let initTools = (type, index, tool, menuToolIninitialization) => {
            let icon = document.createElement('div');
            if (type == 'toggleButton') {
                icon.className = 'jqx-editor-toolbar-icon jqx-editor-toolbar-icon-' + theme + ' buttonIcon ';
            }
            switch (index) {
                case 0:
                    icon.className += 'jqx-editor-toolbar-icon-bold jqx-editor-toolbar-icon-bold-' + theme;
                    icon.setAttribute('title', 'Bold');
                    tool[0].appendChild(icon);
                    tool[0].firstChild.style.margin = 0;
                    break;
                case 1:
                    icon.className += 'jqx-editor-toolbar-icon-italic jqx-editor-toolbar-icon-italic-' + theme;
                    icon.setAttribute('title', 'Italic');
                    tool[0].appendChild(icon);
                    tool[0].firstChild.style.margin = 0;
                    break;
                case 2:
                    icon.className += 'jqx-editor-toolbar-icon-underline jqx-editor-toolbar-icon-underline-' + theme;
                    icon.setAttribute('title', 'Underline');
                    tool[0].appendChild(icon);
                    tool[0].firstChild.style.margin = 0;
                    break;
                case 3:
                    tool.jqxToggleButton({ width: 80, toggled: true });
                    tool[0].innerText = 'Enabled';
                    tool.on('click', () =>
                    {
                        let toggled = tool.jqxToggleButton('toggled');
                        if (toggled)
                        {
                            tool.text('Enabled');
                        } else
                        {
                            tool.text('Disabled');
                        }
                    });
                    break;
                case 4:
                    tool.jqxDropDownList({ width: 130, source: ["<span style='font-family: Courier New;'>Courier New</span>", "<span style='font-family: Times New Roman;'>Times New Roman</span>", "<span style='font-family: Verdana;'>Verdana</span>"], selectedIndex: 1 });
                    break;
                case 5:
                    tool.jqxComboBox({ width: 50, source: [8, 9, 10, 11, 12, 14, 16, 18, 20], selectedIndex: 3 });
                    break;
                case 6:
                    tool.jqxInput({ width: 200, placeHolder: "Type here to search..." });
                    break;
            }
        }
        return (
            <JqxToolBar
                width={'50%'} height={35}
                initTools={initTools} tools={tools}
            />       
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'));
