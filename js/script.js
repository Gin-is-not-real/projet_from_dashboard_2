    function switchEditModeForLine(id, isOn) {
        if(isOn != false) {
            addClassNameOnEditAndAble(id);
        }
        else {
            removeClassNameOnEditAndDisable();
        }
        switchActionsButtonsHidden(id);
        // let s = getComputedStyle(line);
        // line.style.backgroundColor = "red";
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
                    //console.log(cc.type);
                    elements.push(cc);
                }
            })
        })
        // let appears = document.getElementsByClassName("appear-on-edit");
        // console.log('appears', appears);
        return elements;
    }

    function switchActionsButtonsHidden(id) {
        let hiddens = document.querySelectorAll('[class*="appear-on-edit"]');
        hiddens.forEach(hidde => {
            if(hidde.id.includes(id)) {
                // console.log('hidde', hidde);
                // console.log('hidden ? ' + hidde.hidden);
                hidde.hidden = !hidde.hidden;
                // console.log('hidden set  ' + hidde.hidden);
            }
        })
    }

    function removeClassNameOnEditAndDisable() {
        let elements = document.querySelectorAll(".on-edit");
        // console.log("on-edit", elements);
        elements.forEach(elt => {
            elt.className = elt.className.includes("on-edit") ? elt.className.replace("on-edit", "") : elt.className;
            elt.disabled = true;
        })
    }


