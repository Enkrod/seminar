
plugin.tx_seminar_seminars {
  view {
    templateRootPaths.0 = EXT:seminar/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_seminar_seminars.view.templateRootPath
    partialRootPaths.0 = EXT:seminar/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_seminar_seminars.view.partialRootPath
    layoutRootPaths.0 = EXT:seminar/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_seminar_seminars.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_seminar_seminars.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_seminar._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-seminar table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-seminar table th {
        font-weight:bold;
    }

    .tx-seminar table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
