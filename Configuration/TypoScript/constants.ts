
plugin.tx_seminar_seminars {
  view {
    # cat=plugin.tx_seminar_seminars/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:seminar/Resources/Private/Templates/
    # cat=plugin.tx_seminar_seminars/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:seminar/Resources/Private/Partials/
    # cat=plugin.tx_seminar_seminars/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:seminar/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_seminar_seminars//a; type=string; label=Default storage PID
    storagePid =
  }
}
plugin.tx_seminar_events {
  view {
  # cat=plugin.tx_seminar_events/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:seminar/Resources/Private/Templates/
    # cat=plugin.tx_seminar_events/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:seminar/Resources/Private/Partials/
    # cat=plugin.tx_seminar_events/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:seminar/Resources/Private/Layouts/
  }
  persistence {
  # cat=plugin.tx_seminar_events//a; type=string; label=Default storage PID
    storagePid =
  }
}