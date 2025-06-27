let flow = document.getElementById("flowRoot");
let selectedTitleId = null;
let selectedCauseId = null;

function selectTitle(titleId, el) {
  const isSame = selectedTitleId === titleId;
  selectedTitleId = isSame ? null : titleId;

  document.getElementById("causeStep")?.remove();
  document.getElementById("solutionStep")?.remove();
  clearSelection(".step-box .option");

  const allTitleBoxes = document.querySelectorAll(".step-box");

  if (isSame) {
    allTitleBoxes.forEach(box => box.classList.remove("hidden"));
    selectedTitleId = null;
  } else {
    allTitleBoxes.forEach(box => box.classList.add("hidden"));
    el.closest(".step-box").classList.remove("hidden");
    el.classList.add("selected");

    fetch("get_data.php?type=cause&title_id=" + titleId)
      .then(res => res.text())
      .then(html => {
        const box = document.createElement("div");
        box.className = "step-box";
        box.id = "causeStep";
        box.innerHTML = `<h2>เลือกสาเหตุ</h2><div id="cause-list">${html}</div>`;
        flow.appendChild(box);
      });
  }
}

function selectCause(causeId, el) {
  const isSame = selectedCauseId === causeId;
  selectedCauseId = isSame ? null : causeId;

  document.getElementById("solutionStep")?.remove();
  clearSelection("#cause-list .option");

  const allCauseItems = document.querySelectorAll("#cause-list .option");

  if (isSame) {
    allCauseItems.forEach(e => e.classList.remove("hidden"));
    selectedCauseId = null;
  } else {
    allCauseItems.forEach(e => e.classList.add("hidden"));
    el.classList.remove("hidden");
    el.classList.add("selected");

    fetch("get_data.php?type=solution&cause_id=" + causeId)
      .then(res => res.text())
      .then(html => {
        const box = document.createElement("div");
        box.className = "step-box";
        box.id = "solutionStep";
        box.innerHTML = `<h2>วิธีแก้ไข</h2><div>${html}</div>`;
        flow.appendChild(box);
      });
  }
}

function clearSelection(selector) {
  const elements = document.querySelectorAll(selector);
  elements.forEach(el => el.classList.remove("selected"));
}
