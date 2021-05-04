    let popup = document.querySelector(".popup");
    let popupConfirm = "";

    function displayHiddePopupConfirm(txt) {
        popup.childNodes[0].textContent = txt;
        popup.style.visibility = popup.style.visibility =='visible' ? 'hidden' : 'visible';
    }
    
    function switchEditModeForLine(id, isOn) {
        if(isOn != false) {
            addClassNameOnEditAndAble(id);
        }
        else {
            removeClassNameOnEditAndDisable();
        }
        switchActionsButtonsHidden(id);
        disableAllOthers(id)
    }

    function addClassNameOnEditAndAble(id) {
        let elements = getLineChilds(id);
        elements.forEach(elt => {
            elt.className += " on-edit";
            elt.className = !elt.className.includes("on-edit") ? elt.className + " on-edit" : elt.className;
            elt.disabled = false;
        });
    }

    function getLineChilds(id) {
        let sel = ".tr" + id;
        let line = document.querySelector(sel);

        let elements = [];
        line.childNodes.forEach(c => {
            c.childNodes.forEach(cc => {
                if(cc.type !== "submit") {
                    elements.push(cc);
                }
            })
        })
        return elements;
    }

    function switchActionsButtonsHidden(id) {
        let hiddens = document.querySelectorAll('[class*="appear-on-edit"]');
        hiddens.forEach(hidde => {
            if(hidde.id.includes(id)) {
                hidde.hidden = !hidde.hidden;
            }
        })
    }
    function disableAllOthers(id) {
        let btn = document.querySelectorAll("input[type='submit']");
        btn.forEach(b => {
            if(!b.id.includes(id)) {
                b.disabled = true;
            }
        })
    }

    function removeClassNameOnEditAndDisable() {
        let elements = document.querySelectorAll(".on-edit");
        elements.forEach(elt => {
            elt.className = elt.className.includes("on-edit") ? elt.className.replace("on-edit", "") : elt.className;
            elt.disabled = true;
        })
    }


